<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF - 8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="javascript/script.js"></script>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <title> Full Stack Eletro</title>

</head>

<body>




    <header>
        <?php
		include "./php/include/menu.html";
	?>
    </header>




    <main id-="mainIndex">
        <div class="container bg-dark text-white">
            <div>
                <h2> Seja Bem Vindo (a)</h2>

                <p> Aqui em nossa loja, <em> programadores tem descontos</em> nos produtos para sua casa</p>
            </div>
        </div>

        <br>
        <div id="carouselExamplesControls" class="carousel slide col-3 mx-auto" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/eletros.png" class="d-block w-100" alt="primeiro slide">
                </div>
                <div class="carousel-item">
                    <img src="imagens/vectorEletros.png" class="d-block w-100" alt="segundo slide">
                </div>
            </div>

    </main>

    <footer>
        <?php
		include "./php/include/footer.html";
		?>
    </footer>


</body>

</html>