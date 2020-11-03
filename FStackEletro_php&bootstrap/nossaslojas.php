<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF - 8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="javascript/script.js"></script>
    <meta name="viewport" content="width=device-width">
    <title> Nossas Lojas</title>
</head>

<body>


<header>
    <!-- menu-->

    <?php
    include ("menu.html");
?>

</header>
<!--fim do menu-->
    <div class=container-fluid>
        <hr>
        <h2> Lojas</h2>
        <hr>
        </div>


    <!-- Principal-->

    <main id="principal">

        <div class="loja">

            <h3> Rio de Janeiro </h3>
            <p> Avenida Presidente Vargas,5000 </p>
            <p>10&ordm; andar</p>
            <p>Centro</p>
            <p>(21) 2589-9999</p>
        </div>


        <div class="loja">
            <h3>São Paulo</h3>
            <p>Avenida Paulista,985</p>
            <p>4&ordm; andar</p>
            <p>Jardins</p>
            <p>(11) 4649-9999</p>
        </div>


        <div class="loja">
            <h3>Santa Catarina</h3>
            <p>Rua Major &Aacute;vila, 370</p>
            <p> Vila Mariana</p>
            <p>(47) 5899-9999 </p>
        </div>


    </main>
    <!-- Fim do Principal -->
    
    <footer>
    <!-- Rodapé -->
    <?php
        include("footer.html");
    ?>
    <!-- Fim do Rodapé -->
    </footer>
</body>

</html>