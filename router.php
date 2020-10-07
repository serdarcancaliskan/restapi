<?php
include_once 'class.inc.php'; //Temel fonksiyonlar için sınıf yüklendi.



class Router{
	private $result;
	  public function Gonder($yol, $yontem, $data){
		  	  
		  
		    if(preg_match('/stocks?(.*)/', $yol, $params) && $yontem == "POST") {$result = $this->POST($data);}
		    if(preg_match('/stocks?(.*)/', $yol, $params) && $yontem == "GET") {$result = $this->GET($data);}

			 return $result;
	  }
	  


	  
	  public function GET () {
		 $class = new SQL(); // JSON, SQL girdi vb. işlemler için tanımlaması yapıldı.
		return $class->Listele(); 
	  }
	  public function POST ($data) {
            $class = new SQL(); // JSON, SQL girdi vb. işlemler için tanımlaması yapıldı.
		     return $class->Yaz($data);
	  }
	  
}
?>