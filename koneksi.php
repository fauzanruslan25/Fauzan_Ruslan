<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "latihan";
$koneksi= mysqli_connect($server,$username,$pass);


if ($koneksi){
    $buka = mysqli_select_db($koneksi, $db);
    echo " DataBase Terhubung ";
    if (!$buka){
        echo"Database Tidak Terhubung";
    }   
}else{
    echo"Database error";

}
    
    

?>