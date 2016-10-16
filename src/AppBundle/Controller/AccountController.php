<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AccountController extends Controller
{
    /**
     * @Route("/incomes")
     * @Template()
     */
    public function incomesAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/expenses")
     * @Template()
     */
    public function expensesAction()
    {
        return array(
                // ...
            );    }

}
