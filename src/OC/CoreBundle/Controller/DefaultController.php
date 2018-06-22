<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCCoreBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        $this->addFlash("info", "La page d'accueil n'existe pas encore");
        return $this->redirectToRoute('oc_home');
//       return $this->render('OCCoreBundle:Default:contact.html.twig') ;
    }
}
