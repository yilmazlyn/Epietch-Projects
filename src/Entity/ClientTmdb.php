<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use stdClass;


class ClientTmdb
{
    private $id;
	private static $client;
    private $key='?api_key=c5a6edd5406b8de58383f65d0e4ec7e9';
	private $config;
    private $url='https://api.themoviedb.org/3/';
    private $discover='discover/movie';
    private $movie='movie/';
    private $base_url;

    
    public static function getClient()
    {
		if(!isset (self::$client))
		self::$client=new static();
	
		return self::$client;
	}

    public function configInit()
    {
        if(!isset($this->config)){
            $request_api = curl_init();
            curl_setopt($request_api, CURLOPT_URL,$this->url.'configuration'.$this->key);
            curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
            // If you are requesting JSON
            curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($request_api);
            // If using JSON...
            $data = json_decode($response);
            $this->config=$data;
            $this->base_url=$data->images->base_url;
        }

    }
	public function getMostPopular()
	{
		$request_api = curl_init();
		curl_setopt($request_api, CURLOPT_URL,$this->url.$this->discover.$this->key.'&sort_by=popularity.desc');
		curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		 // If you are requesting JSON
		curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($request_api);
		// If using JSON...
		$data = json_decode($response);
		return $data;
	}
	public function getImage($url,$size)
	{
		$this->configInit();
		$config=$this->config;
		
		//return $config->images->base_url.$config->images->poster_sizes[$size].$url;
		return $config->images->base_url.'w342'.$url;
	}
	
	public function getMovie($id)
	{
		
		$request_api = curl_init();
		$url=$this->url.$this->movie.$id.$this->key.'&append_to_response=videos,images';
		curl_setopt($request_api, CURLOPT_URL,$url);
		//var_dump($url); echo "<br>";
		curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		 // If you are requesting JSON
		curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($request_api);
		//var_dump($request_api);
		// If using JSON...
		$data = json_decode($response);
		return $data;
		
	}
	public function getAllGenres()
	{
		
		$request_api = curl_init();
		$url='https://api.themoviedb.org/3/genre/movie/list?api_key=c5a6edd5406b8de58383f65d0e4ec7e9&language=en-US';
		curl_setopt($request_api, CURLOPT_URL,$url);
		curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		 // If you are requesting JSON
		curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($request_api);
		// If using JSON...
		$data = json_decode($response);
		return $data;
	}

	public function getGenre($page, $id){
        $request_api = curl_init();
        $url='https://api.themoviedb.org/3/discover/movie?api_key=c5a6edd5406b8de58383f65d0e4ec7e9&with_genres='.$id.'&page='.$page;
        curl_setopt($request_api, CURLOPT_URL,$url);
        curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
        // If you are requesting JSON
        curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($request_api);
        // If using JSON...
        $data = json_decode($response);
        return $data;
    }

    public function getDate($page, $date){
        $request_api = curl_init();
        $url='https://api.themoviedb.org/3/discover/movie?api_key=c5a6edd5406b8de58383f65d0e4ec7e9&primary_release_year='.$date.'&page='.$page;
        curl_setopt($request_api, CURLOPT_URL,$url);
        curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
        // If you are requesting JSON
        curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($request_api);
        // If using JSON...
        $data = json_decode($response);
        return $data;
    }
	
	public function getLastMovie()
    {
		$request_api = curl_init();
		$url=$this->url.$this->discover.$this->key.'&primary_release_date.gte=2020-01-01&primary_release_date.lte=2020-04-10&sort_by=release_date.desc&page=1&adult=false';
		curl_setopt($request_api, CURLOPT_URL,$url);
		curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		 // If you are requesting JSON
		curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($request_api);
		// If using JSON...
		$data = json_decode($response);
		return $data->results[0];
	}
	
	public function getLastAdd()
    {
		$request_api = curl_init();
		$url='https://api.themoviedb.org/3/movie/latest?api_key=c5a6edd5406b8de58383f65d0e4ec7e9&adult=false';
		curl_setopt($request_api, CURLOPT_URL,$url);
		curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		 // If you are requesting JSON
		curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($request_api);
		// If using JSON...
		$data = json_decode($response);
		return $data;
	}
	public function getAllMovies($page)
	{
		$request_api = curl_init();
		$url=$this->url.$this->discover.$this->key.'&primary_release_date.gte=2000-09-01&primary_release_date.lte=2020-05-12&sort_by=primary_release_date.desc&page='.$page.'&adult=false';
		curl_setopt($request_api, CURLOPT_URL,$url);
		curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		 // If you are requesting JSON
		curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($request_api);
		// If using JSON...
		$data = json_decode($response);
		return $data;
	}

	public function getActorId($acteurName){

        $acteurName = str_replace(' ', '%20', $acteurName);

        $request_api = curl_init();
        $url='https://api.themoviedb.org/3/search/person?api_key=c5a6edd5406b8de58383f65d0e4ec7e9&query='.$acteurName.'&page=1';
        curl_setopt($request_api, CURLOPT_URL,$url);
        curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
        // If you are requesting JSON
        curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($request_api);
        // If using JSON...
        $data = json_decode($response);

        if (count($data->results)==0) {
           return NULL;
        }
        $acteurId = $data->results[0]->id;

        return $this->getActorMovies($acteurId);

    }

    public function getSearchedTitle($title){
        $page=1;
        $title = str_replace(' ', '%20', $title);

        $request_api = curl_init();
        $url= 'https://api.themoviedb.org/3/search/movie?api_key=c5a6edd5406b8de58383f65d0e4ec7e9&query='.$title.'&page='.$page.'&adult=false';
        curl_setopt($request_api, CURLOPT_URL,$url);
        curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
        // If you are requesting JSON
        curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($request_api);
        // If using JSON...
        $data = json_decode($response);

        if (count($data->results)==0) {
            return NULL;
        }

        return $data;

    }

	public function getActorMovies($id)
	{
		$request_api = curl_init();
		$url='https://api.themoviedb.org/3/person/'.$id.'/movie_credits?api_key=c5a6edd5406b8de58383f65d0e4ec7e9';
		curl_setopt($request_api, CURLOPT_URL,$url);
		curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		 // If you are requesting JSON
		curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($request_api);
		// If using JSON...
		$data = json_decode($response);

        $obj = new \stdClass();
        $obj->results=$data->cast;
		return $obj;
	}
	public function getActors($id)
	{
		$request_api = curl_init();
		$url=$this->url.$this->movie.$id.'/credits'.$this->key;
		curl_setopt($request_api, CURLOPT_URL,$url);
		curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		 // If you are requesting JSON
		curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($request_api);
		// If using JSON...
		$data = json_decode($response);
		if(isset($data->cast)&&!empty($data->cast))
		{
			return $data->cast;
		}
		
		return null;
	}
	public function getThreeMostPopular()
	{
		$request_api = curl_init();
		$url=$this->url.$this->discover.$this->key.'&primary_release_date.gte=2000-09-01&primary_release_date.lte=2020-04-07&sort_by=popularity.desc&page='.$page.'&adult=false';
		curl_setopt($request_api, CURLOPT_URL,$url);
		curl_setopt($request_api, CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		 // If you are requesting JSON
		curl_setopt($request_api, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($request_api);
		// If using JSON...
		$data = json_decode($response);
		return $data;
		
	}
	public function getConfig()
	{
		return $this->config;
	}
	public function setKey($key)
	{
		$this->key=$key;
	}
	public function getKey(): ?int
    {
        return $this->key;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
	public function setId($id)
	{
		$this->id=$id;
	}
	
}
