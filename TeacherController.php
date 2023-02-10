<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher/{name}', name: 'app_teacher')]
    public function index($name): Response
    {  
        return $this->render('teacher/index.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/teach/{name}', name: 'teach')]
    public function showTeacher($name): Response
    {
       return new   Response('bonjour '.$name);  
    }
    
    #[Route('/gotoindex', name: 'gotoindex')]
    public function gotoindex(): Response
    {
       return $this->redirectToRoute('student');  
    }
    
}
