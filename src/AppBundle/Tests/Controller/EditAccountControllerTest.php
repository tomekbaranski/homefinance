<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditAccountControllerTest extends WebTestCase
{
    public function testNewaccount()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newaccount');
    }

    public function testEditaccount()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editaccount');
    }

    public function testDeleteaccount()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteaccount');
    }

    public function testNewgroup()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newgroup');
    }

    public function testEditgroup()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editgroup');
    }

    public function testDeletegroup()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deletegroup');
    }

}
