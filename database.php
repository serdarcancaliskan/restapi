<?php 
Class Database
{
 // Veritabanı bağlantı bilgileri
    private $server = "localhost";
    private $name = "xxxxxxx";
    private $user = "xxxxxxx";
    private $password = "1xxxxxxx";



    public function Baglan()
    {
        $conn = mysqli_connect( $this->server, $this->user, $this->password, $this->name);
        return $conn;
    }
}
?>