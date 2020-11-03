<?php 
include "conexao.php";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF - 8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="javascript/produtos.js"></script>
    <script src="javascript/pedido.js"></script>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> Produtos</title>
</head>

<body>


    <!--Inicio do Menu -->
    <?php
    include ("menu.html");
        ?>
    <!--Fim do Menu -->

    <!-- cabecalho -->

        <div class=container-fluid>
        <hr>
        <h2> Produtos</h2>
        <hr>
        </div>

    <!-- fim do cabecalho -->



    <!-- Seção de categoria -->
    <div class="categorias">
        <h3> Categorias</h3>
        <ul id="lista">
            <li onclick="exibirTodos()">Todos (12)</li>
            <li onclick="exibirCategoria ('geladeira')">Geladeiras (3)</li>
            <li onclick="exibirCategoria ('fogao')">Fogões (2)</li>
            <li onclick="exibirCategoria ('microonda')">Microondas (3)</li>
            <li onclick="exibirCategoria ('lavadora')"> Lavadora de Roupas (2)</li>
            <li onclick="exibirCategoria ('lavalouca')">Lava-Louças (2)</li>

        </ul>
    </div>

    <!-- fim da categoria -->
  


    <!-- Produtos -->
    <section class="produtos">

        <?php
        $sql = "select * from produto";
        $result = $conect->query($sql);

        if($result->num_rows >0){
            while($rows=$result->fetch_assoc()){
            ?>
        
    


        <div class="produto" style="display: block" id="<?php echo $rows["categoria"];?>">
            <img src= ".<?php echo $rows["imagem"]?>" onclick=" destaque(this)">
            <hr>
            <div class="descricao"><?php echo $rows["descricao"];?></div>
            <div class="preco1"><strike>R$ <?php echo $rows["preco_venda"]; ?> </strike> </div>
            <div class="preco2"> R$ <?php echo $rows["preco"]; ?> </div>
            
        </div>
        <?php
        }
        }else {
            echo "Nenhum produto cadastrado";
        }


        ?>
    </section>
    <!-- Fim-dos-Produtos -->

    <br>
    
    <footer>
    <!-- Rodapé -->
    <?php
        include("footer.html");
    ?>
    <!-- Fim do Rodapé -->
    </footer>

</body>

</html>