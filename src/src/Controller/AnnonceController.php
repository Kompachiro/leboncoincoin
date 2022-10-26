<?php

namespace App\Controller;

use App\Factory\AnnoncesFactory;
use App\Repository\AnnoncesRepository;
use Faker\Factory;
use App\Entity\Annonces;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_annonce')]
    public function index(AnnoncesRepository $annoncesRepository): Response
    {

        $annonces = $this->entityManager->getRepository(Annonces::class)->findAll();


        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }
}
