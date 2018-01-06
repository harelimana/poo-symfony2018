<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerTest extends WebTestCase
{
    public function testAddcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addCategorie');
    }

    public function testDeletecategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteCategorie');
    }

    public function testRetrieveall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/retrieveAll');
    }

    public function testRetrievecategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/retrieveCategorie');
    }

}
