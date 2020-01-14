<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    // Ce qui s'affichera quand on arrive sur la page d'aacueil

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        $var = 2;
        dd($var);
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig', [
            'title' => 'titre 2',
            'age' => 31
        ]);
    }

    /**
     * @Route("/blog/22", name="blog_show")
     */
    public function show()
    {
        return $this->render('blog/show.html.twig');
    }


    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        $var = 2;
        dd($var);
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }




}
