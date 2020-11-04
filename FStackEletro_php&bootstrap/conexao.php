c
<?php
$severname= "localhost";
$username = "root";
$password = "recode123"; 
$database = "lojafullstackeletro";

//criando conexao
$conect = mysqli_connect($severname,$username,$password,$database);

//verificando conexao
if(!$conect){
    die("a conexão falhou" .mysqli_connect_error());
}

//mysqli_close($conect)

?>
