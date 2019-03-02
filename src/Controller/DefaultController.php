<?php
/*
  ./src/Controller/PageController.php
*/
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Page;
use App\Repository\PageRepository;
use Symfony\Component\Routing\Annotation\Route;



class DefaultController extends AbstractController {

    private $_repository;

    public function __construct(PageRepository $repository){
      $this->_repository = $repository;
    }
    /**
     *
     * @Route("/{id}-{slug}", name="app_homepage",requirements={"id"="[1-9][0-9]*","slug"="[a-z][a-z0-9\-]*"},defaults={"id"=1,"slug"="editorial"})
     */

    public function show(Page $page){
      return $this->render('pages/show.html.twig',[
        'page' => $page
      ]);
    }


}
