<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Seonay',
        ]);
    }
    #[Route('/bonjour', name: 'app_bonjour')]
    public function app_bonjour (): Response
    {
        $dateDuJour = date('d/m/Y H:i:s');
        $personne = [
            'prenom' => 'Seonay',
            'nom' => 'D',
            'age' => '19',
            'job' => 'Developpeur Fullstack',
            'pays' => 'France',
        ];
        return $this->render('home/hello.html.twig', [
            'prenom' => $personne['prenom'],
            'nom' => $personne['nom'],
            'age' => $personne['age'],
            'job' => $personne['job'],
            'pays' => $personne['pays'],
            'dateDuJour' => $dateDuJour,

        ]);
    }


}
