<?php

namespace App\Controller;

use App\Utils;
use App\Form\BlogFormType;
use App\Form\ProfileFormType;
use App\Repository\ProfileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use JsonException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;



class ProfileController extends AbstractController
{
    public function __construct(
        private RequestStack $requestStack,
    ) {
        // Accessing the session in the constructor is *NOT* recommended, since
        // it might not be accessible yet or lead to unwanted side-effects
        // $this->session = $requestStack->getSession();
    }


  

    #[Route('/register', methods: ['GET', 'POST'], name: 'register')]
    public function register (Request $request)
    {
        $mesERR = '';
        $session = $request->getSession();

        if ($request->isMethod('POST')){
            
            $data = $request->getContent();
            parse_str($request->getContent(), $data);
            $data = json_encode($data);

            $url = 'http://127.0.0.1:8001/register';

            $options = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => 'Content-type: application/ld+json',
                    'content' => $data
                )
            );

            $context = stream_context_create($options);
            $response = file_get_contents($url, false, $context);

            $token = json_decode($response, true)['token'];

            if ($token){
                $session->set('token', $token);
                dd('here');
                return $this->redirectToRoute('account');   //!!!!!!!!!!!!!!!!
            }

            else {
                $mesERR = json_decode($response, true)['error'];
                return $this->render('profiles/register.html.twig',[
                    'inside' => null,
                    'error' => $mesERR
                ]);

            }

            // try{
            //     $response = file_get_contents($url, false, $context);

            //     return $this->redirectToRoute('login');   //!!!!!!!!!!!!!!!!

            // } catch (Exception $e) {
            //     $statusCode = $http_response_header[0];
            //     if ($statusCode === 'HTTP/1.1 409 Conflict') {
            //         $mesERR = 'User with this email already exists';
            //     }
            //     if ($statusCode === 'HTTP/1.1 400 Bad Request') {
            //         $mesERR = 'Email and password are required';
            //     }

            // }

            
        }

        return $this->render('profiles/register.html.twig',[
            'inside' => null,
            'error' => $mesERR,
        ]);

    }

    #[Route (
        path: '/logout',
        name: 'logout',
        methods: ["POST", "GET"]
    )]
    public function logout (Request $request)
    {
        $token = $this->requestStack->getSession()->get('token');

        // $url = 'http://127.0.0.1:8001/logout';

        // Utils::makeRequest($token, $url, 'POST');

        $session = $request->getSession();
        $session->invalidate();

        return $this->redirectToRoute('blogs');

    }


    #[Route('/reset-password', name: 'reset-password',  methods:['POST', "GET"] )]
    public function reset (Request $request)
    {
        $session = $request->getSession();
        $mesERR = '';

        if ($request->isMethod('POST'))
        {     
            $data = $request->getContent();
            parse_str($request->getContent(), $data);
            $data = json_encode($data);

            $url = 'http://127.0.0.1:8001/reset-password';

            $options = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => 'Content-type: application/ld+json',
                    'content' => $data
                )
            );
            $context = stream_context_create($options);

            // dd($context);
            // try{
            $response = file_get_contents($url, false, $context);
            $mesERR = json_decode($response, true)['error'];
            if ($mesERR) {
                return $this->render('profiles/reset.html.twig', [
                    'inside' => false,
                    'error' => $mesERR
                ]);
            }



            // } 
            // catch (Exception $e) {
            //     $statusCode = $http_response_header[0];
            //     if ($statusCode === 'HTTP/1.1 409 Conflict') {
            //         $mesERR = 'Email and password are required';
            //     }
            //     // dd($e);
            // }

            return $this->redirectToRoute('login');



        }


        return $this->render('profiles/reset.html.twig', [
            'inside' => false,
            'error' => $mesERR
        ]);
    }


    #[Route('/login', methods: ['GET', 'POST'], name: 'login')]
   
    public function login (Request $request)
    {
        $mesERR = '';
        $session = $request->getSession();

        if ($request->isMethod('POST'))
        {
            
            $data = $request->getContent();
            parse_str($request->getContent(), $data);
            $data = json_encode($data);

            $url = 'http://127.0.0.1:8001/login';

            $options = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => 'Content-type: application/ld+json',
                    'content' => $data
                )
            );
            $context = stream_context_create($options);


            $response = file_get_contents($url, false, $context);

            $token = json_decode($response, true)['token'];

            if ($token){
                $session->set('token', $token);
                return $this->redirectToRoute('account');   //!!!!!!!!!!!!!!!!
            }

            else {
                $mesERR = json_decode($response, true)['error'];
                return $this->render('profiles/login.html.twig',[
                    'inside' => null,
                    'error' => $mesERR
                ]);

            }




            // try{
            //     $response = file_get_contents($url, false, $context);
            //     // if ($response){
            //         dd($response);
            //         $token = json_decode($response, true)['token'];

            //         $session->set('token', $token);
            //         return $this->redirectToRoute('account');   //!!!!!!!!!!!!!!!!
            //     // }
            //     // dd($token);

               

            // } catch (Exception $e) {
            //     dd('gefe');
            //     $statusCode = $http_response_header[0];
            //     if ($statusCode === 'HTTP/1.1 409 Conflict') {
            //         $mesERR = 'Email and password are required';
            //     }
            //     if ($statusCode === 'HTTP/1.1 400 Bad Request') {
            //         $mesERR = 'Invalid email or password';
            //     }
            // }
            

            // return $this->redirectToRoute('login');   //!!!!!!!!!!!!!!!!
        }
        return $this->render('profiles/login.html.twig',[
            'inside' => null,
            'error' => $mesERR
        ]);

    }



    #[Route('/profiles', methods: ['GET', 'POST'], name: 'profiles')]
    public function index(Request $request): Response
    {
        // $some_query = '';

        // if ($request->query->has('some_query'))
        //     $some_query =$request->get('some_query');
        //     // dd($query);
        

        // if (!$some_query)
        //     $profiles = $this->profileRepo->findAll();
        // else 
        //     $profiles = $this->profileRepo->findBySearchQuery($some_query);

        $token = $this->requestStack->getSession()->get('token');

        $data = Utils::getMyUrl('profiles');
        // $session = $this->requestStack->getSession();
        // $token = $session->get('token');
        if ($request->isMethod('POST'))
        {
            parse_str($request->getContent(), $data);
            $query = json_encode($data['query'], true);  

            $queryParams = array('query' => $query);
            $url = 'http://localhost:8001/api/' . 'profiles' . '?' . http_build_query($queryParams);
            $curl = curl_init($url);

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            $data = json_decode($response, true);

            // dd($url);
        }
        $context = [
            'profiles' => $data,
            'inside' => $token !== null

        ];

        return $this->render('profiles/profiles.html.twig', $context);
    }



    #[Route('/profiles/{id}', methods:['GET'], name:'profile')]
    public function profile($id, Request $request) : Response
    {
        $session = $request->getSession();
        $token = $session->get('token');

        $profile = Utils::getMyUrl('profiles/' . $id);

        if ($profile){

            // dd($profile);


            $context = [
                'profile' => $profile,
                'page'=> '',
                'inside' => $token !== null
            ];



            return $this->render('profiles/profile.html.twig', $context);
        }

        // $profile = Utils::getMyUrl('profiles/' . $id);

        // $session = $request->getSession();
        // $token = $session->get('token');
        // $url = 'http://127.0.0.1:8001/api/token';

        // $data = [
        //     'token' => $token
        // ] ;

        // $options = array(
        //     'http' => array(
        //         'method' => 'POST',
        //         'header' => 'Content-type: application/ld+json',
        //         'content' => json_encode ($data)
        //     )
        // );
        //     // dd($options);
        // $cntx = stream_context_create($options);

        // $response = file_get_contents($url, false, $cntx);


        // if (!$response) 
        //     $this->redirectToRoute('login');
        // else 
        //     $current_profile = json_decode($response, true);

        // // dd($response);

        // $context = [
        //     'profile' => $profile,
        //     'page'=> '',
        //     'in' => $token !== null

        // ];

        // return $this->render('profiles/profile.html.twig', $context);
    }

    #[Route('/profiles/edit/{id}' , name:'edit-profile')]
    public function edit($id, Request $request) : Response
    {
        $session = $this->requestStack->getSession();
        $token = $session->get('token');
        $url = 'http://localhost:8001/api/profiles/account';
        $res = Utils::makeRequest($token, $url, 'GET' );
        $profile = json_decode($res, true);

        // dd($profile);


        if ($request->isMethod("POST"))
        {
            $data = $request->getContent();
            parse_str($request->getContent(), $data);
            $data = json_encode($data);   
            // dd($data);

            $url = 'http://127.0.0.1:8001/api/profiles/' . $id;

            Utils::makeRequest($token, $url, 'PATCH', $data);

            return $this->redirectToRoute('account');


        }


        return $this->render('profiles/edit.html.twig', [
            'profile' => $profile,
            'inside' => $token !== null

        ]);
    }


    // private function findProfileByToken () 
    // {
    //     $session = $this->requestStack->getSession();
    //     $token = $session->get('token');
    //     $url = 'http://localhost:8001/api/token';
    //     $data = [
    //         'token' => $token
    //     ];
    //     $res = Utils::makeRequest($token, $url, 'POST' , json_encode($data));

    //     $id = json_decode($res, true)['id'];
    //     $profile = Utils::getMyUrl('profiles/' . $id);
    //     return $profile;
    // }



    #[Route('/account', name: 'account')]
    public function account(Request $request) : Response
    {
       
        $session = $this->requestStack->getSession();
        $token = $session->get('token');
        $url = 'http://localhost:8001/api/profiles/account';
        
        $res = Utils::makeRequest($token, $url, 'GET' );

        $profile = json_decode($res, true);
        // dd($res);
        if (!$profile)
        {
            $session->invalidate();
            return $this->redirectToRoute('login');
        }
        // dd($id);
        return $this->render('profiles/profile.html.twig', [
            'profile' => $profile,
            'page' => 'myPage',
            'inside' => $token !== null

        ]);


    }





   



}
