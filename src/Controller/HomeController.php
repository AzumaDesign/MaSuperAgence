<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param PropertyRepository $repository
     */
    public function index(PropertyRepository $repository)
    {
        $properties = $repository->findLatest();


        return $this->render('home/index.html.twig', [
            'properties' => $properties,
        ]);
    }




}
