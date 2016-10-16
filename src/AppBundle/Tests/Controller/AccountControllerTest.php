<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AccountControllerTest extends WebTestCase
{
    public function testIncomes()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/incomes');
    }

    public function testExpenses()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/expenses');
    }

}
