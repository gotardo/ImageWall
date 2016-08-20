<?php

namespace ImageWall\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImageWallWebBundle:Default:index.html.twig');
    }
}
