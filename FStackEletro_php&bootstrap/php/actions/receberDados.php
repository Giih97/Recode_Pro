<?php
require_once "conexao.php";

if ( isset( $_POST['nome'] ) && isset( $_POST['msg'] ) ) {
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

$sql = "INSERT INTO comentarios (nome, msg) VALUES ('$nome','$msg')";
$result = $conect->query( $sql );

}

$sql = "select * from comentarios";
$result = $conect->query( $sql );

if ( $result) {
    ?>


        <script>
        alert ("Comentario efetuado com sucesso!");
        window.location.href= "../../contato.php";
        </script>

        <?php
    
} else {
    echo "Nenhum comentário ainda!";
}

?>