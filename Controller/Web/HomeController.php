<?php

namespace Tabernicola\BlogBundle\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('TabernicolaBlogBundle::index.html.twig');
    }
}
