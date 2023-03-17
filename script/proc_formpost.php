<?php 

session_start();
require_once('f_stringclean.php');
require_once('connectdb.php');

$titulo = stringclean($_POST["titulo"]);
$texto = stringclean($_POST["texto"]);
$cor = stringclean($_POST['cor']);

$data = date('Y-m-d');
$hora = date('H:i');

$sql = "INSERT INTO tbtexto
    (titulo, texto, data_postagem, hora_postagem, cor) VALUES
    ('$titulo', '$texto', '$data', '$hora', '$cor')";

mysqli_query($conn,$sql);
$_SESSION['msg'] = 'Sua mensagem foi publicada!';
header("location: ../index.php");

?>