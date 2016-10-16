<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EditAccountController extends Controller
{
    /**
     * @Route("/newaccount")
     * @Template()
     */
    public function newAccountAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/editaccount")
     * @Template()
     */
    public function editAccountAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/deleteaccount")
     * @Template()
     */
    public function deleteAccountAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/newgroup")
     * @Template()
     */
    public function newGroupAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/editgroup")
     * @Template()
     */
    public function editGroupAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/deletegroup")
     * @Template()
     */
    public function deleteGroupAction()
    {
        return array(
                // ...
            );    }

}
