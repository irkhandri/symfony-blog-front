<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Utils;

class InterestController extends AbstractController
{
    public function __construct(
        private RequestStack $requestStack,
    ) {
        // Accessing the session in the constructor is *NOT* recommended, since
        // it might not be accessible yet or lead to unwanted side-effects
        // $this->session = $requestStack->getSession();
    }

    #[Route('/interest-create', name: 'interest-create')]
    public function index(Request $request): Response
    {
        $session = $this->requestStack->getSession();
        $token = $session->get('token');

        if ($request->isMethod("POST")) {

            $data = $request->getContent();
            parse_str($request->getContent(), $data);
            $data = json_encode($data);     
            
            $url = 'http://127.0.0.1:8001/api/interests';

            Utils::makeRequest($token, $url, 'POST', $data);
          
            return $this->redirectToRoute('account');
        }
        return $this->render('interest/interest.html.twig', [
            'page' => 'create',
            'inside' => $token !== null
        ]);
    }



    #[Route('/interest-edit/{id}', name: 'interest-edit')]
    public function edit(Request $request, $id): Response
    {
        $interest =  Utils::getMyUrl('interests/' . $id );
        $session = $this->requestStack->getSession();
        $token = $session->get('token');
        if ($request->isMethod("POST")) {

            

            $data = $request->getContent();
            parse_str($request->getContent(), $data);
            $data = json_encode($data);     
            
            $url = 'http://127.0.0.1:8001/api/interests/' . $id;

            Utils::makeRequest($token, $url, 'PATCH', $data);
          
            return $this->redirectToRoute('account');
        }
        return $this->render('interest/interest.html.twig', [
            'page' => 'edit', 
            'interest' => $interest,
            'inside' => $token !== null
        ]);
    }


    #[Route('/interest-delete/{id}', name: 'interest-delete')]
    public function del(Request $request, $id)
    {
        $session = $this->requestStack->getSession();
        $token = $session->get('token');
        $url = 'http://127.0.0.1:8001/api/interests/' . $id;

        Utils::makeRequest($token, $url, 'DELETE' );

        return $this->redirectToRoute('account');
    }
}
