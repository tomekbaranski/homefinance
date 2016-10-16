<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DataControllerTest extends WebTestCase
{
    public function testAccount()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/account');
    }

    public function testDeletedata()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deletedata');
    }

    public function testEditdata()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editdata');
    }

}
