<?php

namespace PTS\UserRegistrationBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('PTSUserRegistrationBundle:Default:index.html.twig');
    }
}
