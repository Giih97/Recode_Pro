<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF - 8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="javascript/index.js"></script>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> Full Stack Eletro</title>

</head>

<body>
<header>
    <!-- menu-->

    <?php
    include ("menu.html");
?>
</header>
    <!--fim do Menu-->

    <div class="container-fluid">
        <hr>
        <h2>Inicio</h2>
        <hr>
    </div>


    <!--Principal -->
    <main id="mainIndex" class="p-3 mb-2 bg-gradient-dark">
        <div class="container bg-dark text-white">
            <h2> Seja Bem Vindo (a)</h2>

            <p> Aqui em nossa loja, <em> programadores tem descontos</em> nos produtos para sua casa</p>
            <br>
        </div>
        <br>
        <figure class="figura">
            <div class>


                <img src="imagens/eletro2.jpg" id="imagem" onmousemove="imagemNova()" onmouseout="imagemVelha ()" />

            </div>
        </figure>
        <br>
        <br>
    </main>
    <!-- fim do Principal -->
    <br> <br>
    <br> <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Rodapé -->
    <footer>
    <?php
        include ("footer.html");
    ?>
    <!-- Fim do Rodapé -->
</footer>
</body>

</html>