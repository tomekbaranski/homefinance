<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function MainSiteAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/settings")
     * @Template()
     */
    public function settingsAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/usersgroup")
     * @Template()
     */
    public function usersGroupAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/stats")
     * @Template()
     */
    public function statsAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/messages")
     * @Template()
     */
    public function messagesAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/import")
     * @Template()
     */
    public function importCsvAction()
    {
        return array(
                // ...
            );    }

}
