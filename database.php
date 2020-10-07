<?php 
Class Database
{
 // Veritabanı bağlantı bilgileri
    private $server = "localhost";
    private $name = "testproj";
    private $user = "test";
    private $password = "123Ab321.Xx";



    public function Baglan()
    {
        $conn = mysqli_connect( $this->server, $this->user, $this->password, $this->name);
        return $conn;
    }
}
?>