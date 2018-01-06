<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategorieController extends Controller
{
    /**
     * @Route("/addCategorie")
     */
    public function addCategorieAction()
    {
     $categorie = new Categorie();
        $categorie->setNom('Belinda');
        $categorie->setDescription('Security Agent');
        $em = $this->getDoctrine()->getManager();
        $em->persist($categorie);
        $em-flush();
        return $this->render('AppBundle:Categorie:add_categorie.html.twig', array('categorie'=>$categorie
            // ...
        ));
    }

    /**
     * @Route("/retrieveCategorie")
     */
    public function retrieveCategorieAction()
    {
        return $this->render('AppBundle:Categorie:retrieve_categorie.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveAllCat")
     */
    public function retrieveAllCatAction()
    {
        return $this->render('AppBundle:Categorie:retrieve_all_cat.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteCateg")
     */
    public function deleteCategAction()
    {
        return $this->render('AppBundle:Categorie:delete_categ.html.twig', array(
            // ...
        ));
    }

}
