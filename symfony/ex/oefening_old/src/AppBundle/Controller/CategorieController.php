<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use AppBundle\PlatformBundle\Entity\Categorie;
//use Symfony\Component\HttpFoundantion\Response;

class CategorieController extends Controller
{
    /**
     * @Route("/addCategorie")
     */
    public function addCategorieAction()
    {
        return $this->render('App:Categorie:add_categorie.html.twig', array(// ...
        ));
    }

    /**
     * @Route("/deleteCategorie")
     */
    public function deleteCategorieAction()
    {
        return $this->render('App:Categorie:delete_categorie.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveAll")
     */
    public function retrieveAllAction()
    {
        return $this->render('App:Categorie:retrieve_all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveCategorie")
     */
    public function retrieveCategorieAction()
    {
        return $this->render('App:Categorie:retrieve_categorie.html.twig', array(
            // ...
        ));
    }

}
