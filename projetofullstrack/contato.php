<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    // criando a conexão

    $connection = mysqli_connect($servername, $username, $password, $database);

  if (!$connection) {
    die ("A conexão não foi realizada" . mysqli_connect_error());
  }

    if(isset($_POST['nome']) && isset($_POST ['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        
        $sql = "insert into comentario (nome, msg) values ('$nome','$msg')";

        $connection->query($sql);
    };

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
    <body>

  
    <?php include_once('menu.html') ?> 
    
        <h2>Contato</h2>
        <hr>
        <section class="contatos">
            <div class="contato">
                <img src="./img/email.png" width="80px">
                contato@fullstackeletro.com
            </div>

            <div class="contato">
                <img src="./img/whatsapp.png" width="90px">
                (11) 99999-9999
            </div>
        
        <form method="post" action="">
            Nome:<br>
            <input type="text" name="nome" style="width: 500px"><br>
            Mensagem:<br>
            <input type="text" name="msg" style="width: 500px"><br>

            <input type="submit" value="Enviar"><br>
        </form>


    <?php

            $sql = "select * from comentario";
            $result = $connection->query($sql);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    echo "Nome: " . $rows['nome'], "<br>";
                    echo "Mensagem: " . $rows['msg'], "<br>";
                    echo "Data: " . $rows['data'], "<br>";
                
                  }
            } else {
                  echo "Nenhum comentário ainda!";
                }
    ?>
    
    <br><br><br><br><br><br>


      <footer id="rodape">
        <p id="formas-pagamento"><b>Formas de pagamentos:</b></p>
        <img src="./img/formas-pagamentos.jpg" width="350px">
        <p>&copy; Recode Pro</p>
      </footer>

    </body>
</html>