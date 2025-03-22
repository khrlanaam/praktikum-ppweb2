<?php
class connectDB{
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect("localhost", "root", "", "bukutamu");
        if(!$this->conn){
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }
    public function db (){
        return $this->conn;
    }
}

$db = new connectDB();
$conn = $db->db();
?>