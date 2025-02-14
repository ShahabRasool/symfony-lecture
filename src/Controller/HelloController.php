<?php
namespace App\Controller;

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
}
