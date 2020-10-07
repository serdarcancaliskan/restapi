<?php
include_once 'database.php'; 
class SQL{
public $conn;

 public function __construct(){
	 $db = new Database();
	 $this->conn = $db->Baglan();
 }
  
    
	


		
	 public function Yaz($data){
		$turn = 'Sonuç: ';
	    $errorcode = 0;
		extract($data);
		
		     if (!is_numeric($stock)) {$turn .= " stock sayısal olmalı,";$errorcode++;}
		     if (!is_numeric($product_id)) {$turn .= " product_id sayısal olmalı,";$errorcode++;}
		     if(!$name){$turn .= " name kısmı boş olmamalı,";$errorcode++;}
		
        

               if ($errorcode == 0) {
				
				  $sql = "INSERT INTO Urunler (product_id, name, stock) VALUES ('$product_id', '$name', '$stock')";

							if (mysqli_query($this->conn, $sql)) {
            
		                        $json = array('code' => $errorcode, 'msg' => 'Success', 'data' => array('product_id' => $product_id, 'name' => $name, 'stock' => $stock) );
	    
                                 } else {
									 $errorcode++;
                                $json = array('code' => $errorcode, 'msg' => 'Error: SQL Yazım Hatası', 'data' => array('product_id' => $product_id, 'name' => $name, 'stock' => $stock) );
                                        } 
				
	            return json_encode($json);
				} 
				else{
					$message = "Error";
					$json = array('code' => $errorcode, 'msg' => 'Error', 'data' => $turn );
					 
					
				}
				
            return json_encode($json);
        }
		
		
		
		public function Listele() {
			$query = "SELECT * FROM Urunler";
            $result = mysqli_query($this->conn, $query);
           
		   $stack=[];
		   $i=0;
           while($row = mysqli_fetch_array($result)){

			   $stack[$i] = array("product_id" => $row['product_id'], "name" => $row['name'], "stock" => $row['stock'], "created_date" => $row['created_date'] );
               $i++;
            }
			if( mysqli_num_rows($result) ) {
			   $msg = "success";
			   $code = 0;	
			}
			else { 
			   $msg = "error";
			   $code = 1;
			}
			  
			   $json=array('code'=>$code, 'msg'=>$msg, 'data'=>$stack);
                return json_encode($json);
		}

        
		
		 

	
	        
	
    }