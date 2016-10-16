<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testMainsite()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testSettings()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/settings');
    }

    public function testUsersgroup()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/usersgroup');
    }

    public function testStats()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/stats');
    }

    public function testMessages()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/messages');
    }

    public function testImportcsv()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/import');
    }

}
