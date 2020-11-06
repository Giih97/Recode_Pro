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