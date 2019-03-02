<?php
/*
  ./src/Controller/PageController.php
*/
namespace App\Controller;
use App\Repository\PageRepository;
use Ieps\Core\GenericController;
use App\Entity\Page;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends GenericController {


  public function __construct(PageRepository $repository){
      $this->_repository = $repository;
  }

    public function showAction(Page $page){
      return $this->render('pages/show.html.twig',[
        'page' => $page
      ]);
    }

    public function indexAction(){
      $pages = $this->_repository->findAll();
      return $this->render('pages/index.html.twig',[
        'pages' => $pages
      ]);
    }

}
