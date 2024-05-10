<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use App\Entity\Blog;
use App\Utils;
use App\Entity\Comment;
use App\Entity\User;
use App\Form\BlogFormType;
use App\Form\CommentFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;

use Symfony\Component\HttpFoundation\RequestStack;

// require_once './src/utils.php' ;



// TODO by API request
class BlogController extends AbstractController
{

    public function __construct(
        private RequestStack $requestStack,
    ) {
        // Accessing the session in the constructor is *NOT* recommended, since
        // it might not be accessible yet or lead to unwanted side-effects
        // $this->session = $requestStack->getSession();
    }

    #[Route('/blogs',  methods:['GET', 'POST'], name: 'blogs')] //, defaults:['name' => null], methods:['GET', 'HEAD'])]
    public function index(Request $request)//: Response
    {
        // findAll() -> SELECT * FROM blogs
        // find() -> select * from blogs where id=
        //findBy() -> select * from blogs order by DESC
        // findOneBy() -> select * from blogs where id = and title = " "
        // count() -> select count() from blogs where id= 
// -------------------
        $token = $this->requestStack->getSession()->get('token');

        $blogs = Utils::getMyUrl('blogs');

        if ($request->isMethod('POST'))
        {
            parse_str($request->getContent(), $data);
            $query = json_encode($data['query'], true);  

            $queryParams = array('query' => $query);
            $url = 'http://localhost:8001/api/' . 'blogs' . '?' . http_build_query($queryParams);
            $curl = curl_init($url);

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            $blogs = json_decode($response, true);

            // dd($url);
        }
        


        /*
        $some_query = '';
        if ($request->query->has('some_query'))
            $some_query = $request->get('some_query');
        
        $blogs = !$some_query ? $this->blogRepo->findAll() : $this->blogRepo->findBySearchQuery($some_query);
        
        */
        $context = [
            'blogs' => $blogs,
            'inside' => $token !== null
        ];

        return $this->render('blogs/blogs.html.twig', $context );
        
    }



    #[Route('/blogs/create', name: 'blog-create', methods: ['POST', "GET"])]
    public function create(Request $request)
    {
    
        $session = $this->requestStack->getSession();
        $token = $session->get('token');

        if ($request->isMethod("POST")) {

            $data = $request->getContent();
            parse_str($request->getContent(), $data);
            $data = json_encode($data);        
            // dd($data);

            $url = 'http://127.0.0.1:8001/api/blogs';

            $headers = "Content-Type: application/ld+json\r\n".
           "x-api-token: $token";

            $options = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => $headers,
                    'content' => $data
                )
            );
            $context = stream_context_create($options);
            try{
                $response = file_get_contents($url, false, $context);
            } catch (\Exception $e) {
                dd($e);
                return $this->redirectToRoute('create_blog');
            }

          
            return $this->redirectToRoute('account');
            
        }

        return $this->render('blogs/create.html.twig', [
            'page' => 'create',
            'inside' => $token !== null

        ]);
    }



    #[Route('/blogs/{id}', methods:['POST', 'GET'],  name: 'blog')] 
    public function blog($id, Request $request): Response
    {
        $token = $this->requestStack->getSession()->get('token');
        // $comments = Utils::getMyUrl('blogs/' .$id . '/comments');
        $blog = Utils::getMyUrl('blogs/' . $id);

        if ($blog){
            $commented = false;
            if ($token)
                $commented = Utils::makeRequest( $token, 'http://localhost:8001/api/commented/' . $id, "GET");
            
            if ($request->isMethod("POST"))
            {
                parse_str($request->getContent(), $data);
                // $data = json_decode($data, true); 
                $url = 'http://127.0.0.1:8001/api/blogs/' . $id . '/create-comment';
    
                $res = Utils::makeRequest($token, $url, 'POST', json_encode($data) );
                // dd($res);
                return $this->redirectToRoute('blogs', [ 'id' => $id ] );
            }
    
            $context = [
                    'blog' => $blog,
                    'inside' => $token !== null,
                    // 'comments' => $comments,
                    'commented' => $commented
    
            ];
            return $this->render('blogs/blog.html.twig', $context );
        }

// dd($blog);
       
    }




    #[Route('/blogs/edit/{id}', name: 'blog-edit')]
    public function edit($id, Request $request) : Response 
    {
        $blog = Utils::getMyUrl('blogs/' . $id );
        // dd($blog);

        $session = $this->requestStack->getSession();
        $token = $session->get('token');


        if ($request->isMethod('POST')) {

            

            $data = $request->getContent();
            parse_str($request->getContent(), $data);
            $data = json_encode($data);        
            // dd ($data);
            $url = 'http://127.0.0.1:8001/api/blogs/' . $id;

            $headers = "Content-Type: application/ld+json\r\n".
           "x-api-token: $token";


            $options = array(
                'http' => array(
                    'method' => 'PATCH',
                    'header' => $headers,
                    'content' => $data
                )
            );

            $context = stream_context_create($options);
            try{
                $response = file_get_contents($url, false, $context);
                // dd($response);

            } catch (\Exception $e) {
                // echo "EDEFFEF";
                // return $this->redirectToRoute('create_blog');
                dd($e);
            }
            return $this->redirectToRoute('account');

            // return $this->redirect('account/' . $id);

            // dd("POST");
        }

        // $blog->setTitle($form->get('title')->getData());
        // $blog->setDescription($form->get('description')->getData());
        // $blog->setImageUrl($form->get('imageUrl')->getData());

        // $this->em->flush();
        // return $this->redirectToRoute('blogs');
    

        return $this->render('blogs/create.html.twig', [
            // 'blog' => $blog,
            'page' => 'edit',
            'blog' => $blog,
            'inside' => $token !== null

        ]);
    }





    
    #[Route('/blogs/delete/{id}', methods: ['GET', 'DELETE'], name: 'blog-delete')]
    public function delete($id) : Response
    {
        $session = $this->requestStack->getSession();
        $token = $session->get('token');

      
        $url = 'http://127.0.0.1:8001/api/blogs/' . $id;

        $headers = "Content-Type: application/ld+json\r\n".
       "x-api-token: $token";

        // dd($data);

        $options = array(
            'http' => array(
                'method' => 'DELETE',
                'header' => $headers
            )
        );
        $context = stream_context_create($options);
        try{
            $response = file_get_contents($url, false, $context);
        } catch (\Exception $e) {
            // echo "EDEFFEF";
            // dd($e);
            return $this->redirectToRoute('account');
        }

        return  $this->redirectToRoute('account');
        
    }

    

    
}
