<?php

namespace Svt\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SvtAdminBundle:Default:index.html.twig');
    }
}
