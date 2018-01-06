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

    public function testRetrievecategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/retrieveCategorie');
    }

    public function testRetrieveallcat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/retrieveAllCat');
    }

    public function testDeletecateg()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteCateg');
    }

}
