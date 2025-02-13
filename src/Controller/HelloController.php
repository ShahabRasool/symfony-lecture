<?php
namespace App\Controller;

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
}
