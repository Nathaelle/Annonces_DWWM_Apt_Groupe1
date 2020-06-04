<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonces", name="allannonces")
     */
    public function showAllAnnonces()
    {
        return $this->render('annonce/annonces.html.twig', [
            'controller_name' => 'AnnonceController',
        ]);
    }

    /**
     * @Route("/annonce", name="annonce")
     */
    public function showAnnonce()
    {
        return $this->render('annonce/annonce.html.twig', [
            'controller_name' => 'AnnonceController',
        ]);
    }

}
