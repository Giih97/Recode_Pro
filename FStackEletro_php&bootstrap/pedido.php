<?php

require_once "conexao.php";
if(isset($_POST['nome_do_cliente'])){
    
   
     
      

$nome_do_cliente= $_POST ['nome_do_cliente'];
$endereco = $_POST ['endereco'];
$telefone =$_POST ['telefone'];
$nome_prod =$_POST ['nome_do_prod'];
$valor_unit = $_POST['valor_unit'];
$quantidade =$_POST ['quantidade'];
$valor_total =$_POST['valor_total'];

$sql = "INSERT INTO pedidos (nome_do_cliente,endereco,telefone,nome_do_prod,valor_unit,quantidade,valor_total) 
values ('$nome_do_cliente','$endereco ','$telefone','$nome_prod','$valor_unit','$quantidade','$valor_total')";

$result = $conect->query($sql);
}

    

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF - 8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="javascript/produtos.js"></script>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> Pedido</title>
</head>
<header>
    <!-- menu-->

    <?php
    include ("menu.html");
?>

</header>
<!--fim do menu-->

<main class=" container-fluid bg-white">
    <h3 class="text-center">Faça seu pedido</h3>
    <form method="post" action="">
        <div class="form-row">

            <div class="col-md-4 mb-3 text-dark">
                <label for="nome_do_cliente">Nome Completo</label>
                <input type="text" name="nome_do_cliente" class="form-control border border-dark" required>

            </div>


            <div class="col-md-4 mb-3 text-dark">
                <label for="endereco"> Endereço</label>
                <input type="text" name="endereco" class="form-control border border-dark" required>
            </div>


            <div class="col-md-3 mb-1 text-dark">
                <label for="telefone">Telefone</label>
                <input type="number" name="telefone" class="form-control border border-dark" required>

            </div>
        </div>


        <div class="form-row">
            <div class="col-md-2 mb-1 text-dark">
                <label for="produto"> Produto</label>
                <input type="text" name="nome_do_prod" class="form-control border border-dark" required>
            </div>


            < <div class="col-md-2 mb-1 text-dark">
                <label for="valor_unit"> Valor Unitário</label>
                <input type="number" name="valor_unit" class="form-control border border-dark" required>
        </div>

        <div class="col-md-2 mb-1 text-dark">
            <label for="quantidade"> Quantidade</label>
            <input type="number" name="quantidade" class="form-control border border-dark"
                placeholder="digite a quantidade" required>
        </div>
        <div class="col-md-2 mb-1 text-dark">
            <label for="valor"> Valor Total</label>
            <input type="number" name="valor_total" class="form-control border border-dark" required>
        </div>
        </div>
        <div>
            <input class="btn btn-outline-dark" type="submit" value="Enviar">




        </div>
    </form>
</main>

<footer>
    <!-- Rodapé -->
    <?php
        include ("footer.html");
    ?>
    <!-- Fim do Rodapé -->
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
</body>

</html>