<?php

namespace App\Controller;

use App\Utils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Attribute\WithHttpStatus;

class MessageController extends AbstractController
{
    public function __construct(
        private RequestStack $requestStack,
    ) {
        // Accessing the session in the constructor is *NOT* recommended, since
        // it might not be accessible yet or lead to unwanted side-effects
        // $this->session = $requestStack->getSession();
    }

    #[Route(
        name: 'create-message',
        path: '/create-message/{id}',
        methods: ['GET', 'POST']
    )]
    public function create ($id, Request $request) 
    {
        $session = $this->requestStack->getSession();
        $token = $session->get('token');

        if ($request->isMethod("POST"))
        {
            $data = $request->getContent();
            parse_str($request->getContent(), $data);
            $data = json_encode($data);   
            
            $url = 'http://127.0.0.1:8001/api/messages/' . $id;

            Utils::makeRequest($token, $url, 'POST', $data);

            return $this->redirectToRoute('profiles');



        }


        return $this->render('message/create.html.twig', [
            'inside' => $token !== null

        ]);

    }


    #[Route('/outbox-messages', name: 'outbox-messages')]
    public function outbox(): Response
    {
        $url = 'http://127.0.0.1:8001/api/';

        $session = $this->requestStack->getSession();

        $token = $session->get('token');


        $outbox = Utils::makeRequest($token, $url . 'outbox-messages', 'GET' );
        // dd($outbox);
        return $this->render('message/input_message.html.twig', [
            'page' => 'out',
            'messages' => json_decode($outbox, true),
            'inside' => $token !== null

        ]);
    }


    #[Route('/inbox-messages', name: 'inbox-messages')]
    public function index(): Response
    {
        $url = 'http://127.0.0.1:8001/api/';

        $session = $this->requestStack->getSession();
        $token = $session->get('token');

        $unread = Utils::makeRequest($token, $url . 'messages/unread', 'GET');
        if (strpos($unread, '401'))
        {
            $session->invalidate();
            return $this->redirectToRoute('login');
        }
        
        $inbox = Utils::makeRequest($token, $url . 'inbox-messages', 'GET' );

        return $this->render('message/input_message.html.twig', [
            'page' => 'in',
            'unread' => $unread,
            'messages' => json_decode($inbox, true),
            'inside' => $token !== null
        ]);
    }



    #[Route('/message/{id}', name: 'messages')]
    public function message($id): Response
    {
        $url = 'http://127.0.0.1:8001/api/messages/' . $id;

        $session = $this->requestStack->getSession();
        $token = $session->get('token');

        $message = Utils::makeRequest($token, $url, "GET");
        // dd($message);
        return $this->render('message/index.html.twig', [
            'mess' => json_decode($message, true),
            'inside' => $token !== null

        ]);
    }



}
