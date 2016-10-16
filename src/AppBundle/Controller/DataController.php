<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DataController extends Controller
{
    /**
     * @Route("/account")
     * @Template()
     */
    public function accountAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/deletedata")
     * @Template()
     */
    public function deleteDataAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/editdata")
     * @Template()
     */
    public function editDataAction()
    {
        return array(
                // ...
            );    }

}
