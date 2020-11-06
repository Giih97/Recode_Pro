c
<?php
$severname= "localhost";
$username = "root";
$password = " "; 
$database = "lojafullstackeletro";

//criando conexao
$conect = mysqli_connect($severname,$username,$password,$database);

//verificando conexao
if(!$conect){
    die("a conexão falhou" .mysqli_connect_error());
}

//mysqli_close($conect)

?>
