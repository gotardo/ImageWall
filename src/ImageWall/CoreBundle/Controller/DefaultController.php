<?php

namespace ImageWall\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImageWallCoreBundle:Default:index.html.twig');
    }
}
