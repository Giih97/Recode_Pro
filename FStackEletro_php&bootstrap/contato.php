<?php
require_once './php/actions/conexao.php';
?>

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
    <title> Contato</title>
</head>

<body>



    <header>
    <?php
		include "./php/include/menu.html";
	?>
    </header>

    <header class="titulo">
        <h2> Contato</h2>
    </header>

    <!-- Principal -->

    <main id="main">
        <div id="email2">
            <h3>E-mail</h3>
            <img src="imagens/email.png " width=" 40px ">
            <p>contato@fullstackeletro.com</p>
        </div>
        <hr>

        <div id="what">
            <h3>Whatsapp</h3>
            <img src="imagens/whatsapp.png " width=" 40px ">
            <p>( 11 ) 98888-88888</p>

        </div>
        <hr>

        <div id="mensg" class="form-group">
            <form method="post" action="./php/actions/receberDados.php">

                Nome:<br>
                <input type="text " id="nome" name="nome" class="form-control"><br>

                Mensagem:<br>
                <input type="text" id=" msg" name="msg" width="200px" class="form-control">

                <input type="submit" value=" Enviar ">
            </form>
        </div>

    </main>

   
    <footer>
    <?php
		include "./php/include/footer.html";
	?>
    </footer>

  
</body>

</html>