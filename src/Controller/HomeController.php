<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home_index')]
    public function index(): Response
    {
        // Retourne une réponse HTTP simple avec le texte "Bonjour"
        return $this->render('home.html.twig');
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        // Retourne une réponse HTTP simple avec le texte "Bonjour"
        return $this->render('contact.html.twig');
    }
    #[Route('/service', name: 'app_service')]
    public function indexx(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/service/{name}', name: 'app_service_show')] // show service
    public function showService($name): Response
    {
        return $this->render('service/showservice.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/', name: 'go_to_index')] // go home
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('home_index');
    }
}
