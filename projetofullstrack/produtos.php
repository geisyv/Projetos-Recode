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

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>
    </head>
    <body>
    <?php include_once('menu.html')?> 
        <div class="container-fluid">
            
        
     <header>
         <h2>Produtos</h2>
    </header>
        <hr>
               
                <section class="categorias">
                    <h3>Categorias</h3>
                    <ul>
                        <li onclick="exibir_todos()">Todos (12)</li>
                        <li onclick="exibir_categoria()">Geladeiras (3)</li>
                        <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                        <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                        <li onclick="exibir_categoria('lavadouraderoupas')">Lavadora de roupas (2)</li>
                        <li onclick="exibir_categoria('lavaloucas')">Lava louças (2)</li>    
                    </ul>
                </section>

                <?php
                     $sql = "select * from produto";

                     $result = $connection->query($sql);
                 
                     if($result->num_rows > 0){
                         while($rows = $result->fetch_assoc()){
                ?>

                        <div class="box_produtos" id=" <?php echo $rows["categoria"]; ?>" style="display:block;">  
                             <img src="<?php echo $rows["imagem"]; ?>" width="120px" onmouseover="destaque(this)">
                             <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                             <hr>
                             <p class="descricao"><strike><?php echo $rows["preco"];?></strike></p>
                             <p class="preco"><?php echo $rows["precofinal"];?></p>   
                         </div>
                       
                <?php
                            }
                 
                     } else {
                         echo "Nenhum produto cadastrado";
                     }
                
                ?>
                

     <br><br><br><br><br><br>
     <br><br><br><br><br><br>
     <br><br><br><br><br><br>
     <br><br><br><br><br><br>
     <br><br><br><br><br><br>

      <footer id="rodape">
        <p id="formas-pagamento"><b>Formas de pagamentos:</b></p>
        <img src="./img/formas-pagamentos.jpg" width="350px">
        <p>&copy; Recode Pro</p>
      </footer>
    </body>
</html>