<?php 
	include_once 'config/myConfig.php';
	class Movie_m extends Connect{
		function __construct(){
			parent:: __construct(); //Gọi hàm kết nối ở file config, sử dụng $conn
		}

	//Truy vấn cơ sở dữ liệu:
		public function getFilmNow(){
			$sql ="SELECT * FROM `movie` WHERE (DAY(CURDATE())-DAY(date_start))>=0";
			$pre=$this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getFilmSoon(){
			$sql="SELECT name,poster FROM `movie` WHERE (DAY(CURDATE())-DAY(date_start))<0";
			$pre=$this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>