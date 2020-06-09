<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClientTmdb;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $client=ClientTmdb::getClient();
        $client->configInit();
        //$genres = $client->getAllGenres();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'lastM' => $client->getLastMovie(),
            'pop' => $client->getMostPopular(),
            //'genres' => $genres,
            'pageMovies' =>$client->getAllMovies(1),'client' =>$client
        ]);
    }
    /**
     * @Route(" / ", name="accueil")
     */
    public function accueil()
    {
        $client=ClientTmdb::getClient();
        $client->configInit();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController','lastM' => $client->getLastMovie(),
            'pop' => $client->getMostPopular(),
            'pageMovies' =>$client->getAllMovies(1),'client' =>$client
        ]);
    }
    /**
     * @Route("/home/{page}", name="home_page")
     */
    public function pageHome($page)
    {
        $client=ClientTmdb::getClient();
        $client->configInit();
        //$genres = $client->getAllGenres();
        return $this->render('home/index.html.twig', [
            'pop' => $client->getMostPopular(),
            'lastM' => $client->getLastMovie(),
            //'genres' => $genres,
            'pageMovies' =>$client->getAllMovies($page), 'client' =>$client,

        ]);
    }

    /**
     * @Route("/home/{page}/{genre}", name="home_page_genre")
     */
    public function pageHomeByGenre($page, $genre)
    {
        $client=ClientTmdb::getClient();
        $client->configInit();
        //$genres = $client->getAllGenres();
        return $this->render('home/index.html.twig', [
            'pop' => $client->getMostPopular(),
            'lastM' => $client->getLastMovie(),
            //'genres' => $genres,
            'pageMovies' =>$client->getGenre($page, $genre),
            'client' =>$client,

        ]);
    }

    /**
     * @Route("/home/{page}/year/{date}", name="home_page_date")
     */
    public function pageHomeByDate($page, $date)
    {
        $client=ClientTmdb::getClient();
        $client->configInit();
        //$genres = $client->getAllGenres();
        return $this->render('home/index.html.twig', [
            'pop' => $client->getMostPopular(),
            'lastM' => $client->getLastMovie(),
            'pageMovies' =>$client->getDate($page, $date),
            'client' =>$client,

        ]);
    }


    /**
     * @Route("/searchFilm", name="searchFilms", methods={"POST"})
     */
    public function filmsBySearch(Request $request)
    {
        $type = $request->request->get('type');
        $text = $request->request->get('text');

        $client=ClientTmdb::getClient();
        $client->configInit();

        if ($type=='acteur'){
$test = $client->getActorId($text);

            return $this->render('home/index.html.twig', [
                'pop' => $client->getMostPopular(),
                'lastM' => $client->getLastMovie(),
                'pageMovies' => $test,
                'client' =>$client,

            ]);

        }else{
            return $this->render('home/index.html.twig', [
                'pop' => $client->getMostPopular(),
                'lastM' => $client->getLastMovie(),
                'pageMovies' =>$client->getSearchedTitle($text),
                'client' =>$client,

            ]);
        }



    }

}
