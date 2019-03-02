<?php
/*
  ./src/Controller/PostController.php
*/
namespace App\Controller;
use App\Repository\PageRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Post;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class PostController
 * @package App\Controller
 */
class PostController  extends AbstractController  {

    /**
     * @Route(name="eedddf")
     * @param int $limit
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(int $limit = 10){

        $posts=$this->getDoctrine()->getRepository(Post::class)->findBy(
            [],
            ['dateCreation' => 'DESC'],
            $limit
        );
      return $this->render('posts/index.html.twig',[
          'posts'=>$posts
      ]);
    }
       /**
         *
         * @Route("/{slug}", name="show",requirements={"slug"="[a-z][a-z0-9\-]*"})
         */
    public function showAction(string $slug){
      return $this->render('posts/show.html.twig', [
        'slug' => $slug

      ]);
    }
    /**
      *
      * @Route("/{slug}/edit", name="edit",requirements={"slug"="[a-z][a-z0-9\-]*"})
      */

    public function editAction(string $slug){
      return $this->render('posts/edit.html.twig', [
        'slug' => $slug
      ]);
    }

}
