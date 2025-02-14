<?php
namespace App\Controller;

use App\Repository\StudentRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    #[Route('/welcome/{name}', name: "welcomeRoute ")]
    public function Welcome($name)
    {
        return $this->render('hello/welcome.html.twig', ['name'=> $name]);
    }
    #[Route('/aboutus', name: "about-us")]
    public function about(LoggerInterface $logger)
    {
        $logger->info('This is an info message.');
        return $this->render('hello/about.html.twig');
    }

    #[Route('/student/showall', name: "showall")]
    public function showall(StudentRepository $studentRepository)
    {
        $students = $studentRepository->getStudent();

        
        return $this->render('student/showall.html.twig', ['students'=>$students]);
    }

    #[Route('/student/show/{id}', name: "show")]
    public function show(StudentRepository $studentRepository, $id)
    {
        $student = $studentRepository->getStudentId($id);

        
        return $this->render('student/show.html.twig', ['student'=>$student]);
    }
}
