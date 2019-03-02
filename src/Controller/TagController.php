<?php
/*
  ./src/Controller/TagController.php
*/
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Tag;
use Symfony\Component\Routing\Annotation\Route;
/**
  *
  * @Route("/tags", name="app_tags_")
  */

class TagController  extends AbstractController  {

  /**
    *
    * @Route("/", name="index")
    */
    public function indexAction(){
      return $this->render('tags/index.html.twig');
    }

    /**
      *
      * @Route("/{slug}", name="show",requirements={"slug"="[a-z][a-z0-9\-]*"})
      */
    public function showAction(string $slug){
      return $this->render('tags/show.html.twig', [
        'slug' => $slug
      ]);
    }

}
