<?php

namespace ImageWall\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImageWallApiBundle:Default:index.html.twig');
    }
}
