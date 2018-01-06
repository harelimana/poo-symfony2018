<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LuckyNumberControllerTest extends WebTestCase
{
    public function testGeneratenumber()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/generateNumber');
    }

}
