<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this
    ->get('templating')
    ->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'yu'));

        return new Response($content);
    }
    public function bybyeAction()
    {
        $content = $this
            ->get('templating')
            ->render('OCPlatformBundle:Advert:bybye.html.twig');

        return new Response($content);
    }
}