<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbnome = "messymind";

$conn = mysqli_connect($hostname,$username,$password,$dbnome);


if(!$conn){
    echo 'erro na conexão com o banco de dados';
    exit;
}

?>