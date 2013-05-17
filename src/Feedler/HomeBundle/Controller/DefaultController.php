<?php

namespace Feedler\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Default controller
 */
class DefaultController extends Controller
{
    /**
     * The homepage
     */
    public function indexAction()
    {
        return $this->render('FeedlerHomeBundle:Default:index.html.twig');
    }
}
