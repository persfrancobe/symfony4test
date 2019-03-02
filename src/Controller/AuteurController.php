<?php
namespace App\Controller;

use App\Entity\Auteur;
use App\Repository\AuteurRepository;
use Ieps\Core\GenericController;
use Symfony\Component\Routing\Annotation\Route;
/**
 *
 * @Route("/auteurs", name="app_auteurs_")
 */

class  AuteurController extends GenericController {


    public function __construct(AuteurRepository $repository){
        $this->_repository = $repository;
    }
    /**
     *
     * @Route("/", name="index")
     */
    public function indexByLetter(string $letter='h'){
        $auteurs = $this->_repository->findByLetter($letter);
        return $this->render('auteurs/index.html.twig',[
            'auteurs' => $auteurs
        ]);
    }
}