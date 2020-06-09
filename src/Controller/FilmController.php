<?php

namespace App\Controller;

use App\Entity\Favoris;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Lists;
use App\Entity\ListFilms;
use App\Entity\ClientTmdb;
use App\Form\ListType;

class FilmController extends AbstractController
{
    /**
     * @Route("/film", name="film")
     */
    public function index()
    {
        return $this->render('film/index.html.twig', [
            'controller_name' => 'FilmController',
        ]);
    }


    /**
     * @Route("/addToFavorites", name="addFavorites", methods={"POST"})
     */
    public function addToFavorites(Request $request)
    {

        $film_id = $request->request->get('film_id');
        $user_id = $this->getUser()->getId();

        $entityManager = $this->getDoctrine()->getManager();
        $favoris = $entityManager->getRepository(Favoris::class)->findOneBy(
            ['user_id' => $user_id,
                'film_id' => $film_id]
        );

        if (isset($favoris))
        {
            $entityManager->remove($favoris);
            $entityManager->flush();
            return $this->json(['deleted' => 'yes']);
        }else{
            $entityManager = $this->getDoctrine()->getManager();
            $favorite = new Favoris();
            $favorite->setUserId($user_id);
            $favorite->setFilmId($film_id);
            $entityManager->persist($favorite);
            $entityManager->flush();
            return $this->json(['created' => 'yes']);

        }

    }


    /**
     * @Route("/addList/{ln}/{ld}/{idF}", name="addList")
     */
    public function addList(Request $request,$ln,$ld,$idF)
    {

        $list= new Lists();
        //Initialising some Data
        $list->setName($ln);
        $list->setDescription($ld);
        $list->setShared(false);
        $list->setUserId($this->getUser()->getId());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($list);
        $entityManager->flush();

        return $this->redirect('/film/'.$idF);
    }



    /**
     * @Route("/addToList/{idL}/{idF}", name="addToList", methods={"GET"})
     */
    public function addToList(Request $request,EntityManagerInterface $em,$idL,$idF)
    {

        $film_id = $idF;
        $user_id = $this->getUser()->getId();
        $list_id=$idL;
        $repository = $em->getRepository(Lists::class);
        $list = $repository->findOneBy(['id' => $idL]) ;
        //var_dump($request->request);
        $entry=new ListFilms();
        $entry->setFilmId($film_id);
        $entry->setListId($list);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($entry);
        $entityManager->flush();
        return $this->redirect('/film/'.$idF);
        //return $this->json(['Correctly Added' => 'yes']);



    }


    /**
     * @Route("/films/lists", name="myList")
     */
    public function getMyLists(EntityManagerInterface $em)
    {
        $id=$this->getUser()->getId();
        $repository = $em->getRepository(Lists::class);
        $lists = $repository->findBy(array('user_id' => $id)) ;
        $pubLists=$repository->findBy(array('shared' => true)) ;
        //var_dump($lists);
        return $this->render('user/myList.html.twig', [
            'controller_name' => 'FilmController',
            'lists' => $lists,
            'pub'=>$pubLists,
        ]);
    }

    /**
     * @Route("/createList", name="createList")
     */
    public function createNewList(Request $request)
    {

        $list= new Lists();
        //Initialising some Data
        $list->setName('Your New List Name');
        $list->setDescription('A short description');
        $list->setUserId($this->getUser()->getId());

        $form=$this->createForm(ListType::class, $list,['csrf_protection' => false]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $list = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($list);
            $entityManager->flush();

            return $this->redirectToRoute('myList');
        }
        return $this->render('user/createList.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editList/{id}", name="editList")
     */
    public function editList(Request $request, EntityManagerInterface $em, $id)
    {

        $repository = $em->getRepository(Lists::class);
        $list = $repository->findOneBy(['id' => $id]) ;

        $form=$this->createForm(ListType::class, $list,['csrf_protection' => false]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $list = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($list);
            $entityManager->flush();

            return $this->redirectToRoute('myList');
        }
        return $this->render('user/editList.html.twig', [
            'controller_name' => 'FilmController',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/deleteList", name="deleteList")
     */
    public function deleteList(Request $request,EntityManagerInterface $em)
    {

        $list_id = $request->request->get('id');

        $repository = $em->getRepository(Lists::class);
        $list = $repository->findOneBy(['id' => $list_id]) ;
        $entityManager = $this->getDoctrine()->getManager();
        $em->remove($list);
        $em->flush();
        return $this->redirectToRoute('myList');
    }

    /**
     * @Route("/list/{id}", name="listFilms")
     */
    public function getFilmsInList($id, EntityManagerInterface $em)
    {
        //get all film_id
        $repository = $em->getRepository(Lists::class);
        $list = $repository->findOneBy(['id' => $id]) ;
        //var_dump($id);
        //$list='test';

        $films=$list->getListFilms();
        //var_dump($films);
        //get client to get all films
        $client=ClientTmdb::getClient();
        $client->configInit();
        return $this->render('user/listFilms.html.twig', [
            'controller_name' => 'FilmController',
            'list' => $list,
            'films' => $films,
            'client' => $client,
        ]);
    }


    /**
     * @Route("/film/{idF}", name="getFilm")
     */
    public function getFilm($idF, EntityManagerInterface $em)
    {

        $user_id = $this->getUser()->getId();
        $repository = $this->getDoctrine()->getRepository(Favoris::class);
        $favoris = $repository->findOneBy([
            'user_id' => $user_id,
            'film_id' => $idF,
        ]);

        if (isset($favoris)){
            $favorite = 'true';
        }else{
            $favorite = 'false';
        }

        $id=$this->getUser()->getId();
        $repository = $em->getRepository(Lists::class);
        $lists = $repository->findBy(array('user_id' => $id)) ;
        $client=ClientTmdb::getClient();
        $client->configInit();
        $movie=$client->getMovie($idF);
        if(isset($movie->poster_path)&&!empty($movie->poster_path))
        {
            $src=$client->getImage($movie->poster_path,4);
        }
        else{
            $src='../img/not_available.png';
        }
        return $this->render('home/film.html.twig', [
            'controller_name' => 'FilmController',
            'movie' => $movie,
            'src' =>$src,
            'actors' =>$client->getActors($id),
            'idF' => $idF,
            'lists' =>$lists,
            'favorite' => $favorite,
        ]);
    }

    /**
     * @Route("/films/favorite/{id}", name="userFavoriteFilms")
     */
    public function getFavoriteFilms($id)
    {
        $client=ClientTmdb::getClient();
        $client->configInit();

        $entityManager = $this->getDoctrine()->getManager();
        $favoris = $entityManager->getRepository(Favoris::class)->findBy(
            ['user_id' => $id,
            ]
        );

        return $this->render('user/favoriteFilms.html.twig', [
            'client' => $client,
            'favoris' => $favoris
        ]);
    }


    /**
     * @Route("/admin/mostFavorite", name="mostFavorite")
     */
    public function mostPopolarFilmsAdmin(EntityManagerInterface $em)
    {
        $repository = $em->getRepository(Favoris::class);
        $favoris = $repository->getMostFavorites() ;
        return $this->render('user/mostFavoriteAdmin.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
