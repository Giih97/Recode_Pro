<?php 

require_once './conexao.php';

if(isset($_POST['cadastrar'])){

    $nome_do_cliente= $_POST ['nome_do_cliente'];
    $endereco = $_POST ['endereco'];
    $telefone =$_POST ['telefone'];
    $nome_prod =$_POST ['nome_do_prod'];
    $valor_unit = $_POST['valor_unit'];
    $quantidade =$_POST ['quantidade'];
    $valor_total =$_POST['valor_total'];
    
    $sql = "INSERT INTO pedidos  VALUES (null,'$nome_do_cliente','$endereco ','$telefone','$nome_prod','$valor_unit','$quantidade','$valor_total')";
    
    $result = $conect->query($sql);



    if ($result){
        ?>

        <script>
        alert ("Pedido efetuado com sucesso!");
        window.location.href="../../pedido.php";
        </script>

        <?php
    }else{
        echo "<p> class='vermelho> Ocorreu um erro!</p>";
    }

    }
    
    ?>
    
        