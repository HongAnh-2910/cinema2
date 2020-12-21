<?php 
include_once 'model/showing_m.php';
class Movie_c extends Movie_m{
		private $movie;
		function __construct(){
			$this->movie=new Movie_m();
		}
		public function movie(){
			$rs= $this->movie->getFilmNow();
			include_once 'view/movieList.php';
			$film= $this->movie->getFilmSoon();
			include_once 'view/comingsoon.php';
		}

}
	
 ?>