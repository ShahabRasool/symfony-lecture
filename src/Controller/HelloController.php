<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController
{
    #[Route('/welcome/{name}', name: "welcomeRoute ")]
    public function Welcome($name)
    {
        return new Response("Welcome to the World of symfony mr {$name}");
    }
}
