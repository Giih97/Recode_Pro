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
    <title> Nossas Lojas</title>
</head>

<body>


    <!--Inicio do Menu -->
    <header>
    <?php
		include "./php/include/menu.html";
	?>
    </header>

    <!--Fim do Menu -->

    <div class=container-fluid>
        <h2> Lojas</h2>
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
 

    <footer>
    <?php
		include "./php/include/footer.html";
	?>
    </footer>
  

</body>

</html>