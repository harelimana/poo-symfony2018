<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyNumberController extends Controller
{
    /**
     * @Route("/generateNumber")
     */
    public function generateNumberAction()
    {
       $number = rand(0, 100);
       return new Response('<html><body>Lucky number: ' . $number . '</body></html>');
     //   return $this->render('AppBundle:LuckyNumber:generate_number.html.twig', array(
            // ...
    //   ));
    }

}
