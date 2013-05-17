<?php

namespace Feedler\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Main controller
 */
class DefaultController extends Controller
{
    /**
     * Homepage of the API
     */
    public function indexAction()
    {
        return $this->render('FeedlerApiBundle:Default:index.html.twig');
    }
}
