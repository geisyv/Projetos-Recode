<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Nossas lojas - Full Stack Eletro</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
    <body>
        
    <?php include_once('menu.html')?> 
    <div class="container-fluid">

        <h2>Nossas Lojas</h2>
        <hr>
        <main class="lojas">
            <div class="loja">
                
                    <h3>Rio de Janeiro</h3>
                    <p>Avenida Presidente Vargas, 5000</p>
                    <p>10 &ordm; andar</p>
                    <p>Centro</p>
                    <p>(21) 3333-3333</p>
            </div>
            
            <div class="loja">
                    <h3>São Paulo</h3>
                    <p>Avenida Paulista, 985</p>
                    <p>3 &ordm; andar</p>
                    <p>Jardins</p>
                    <p>(11) 4444-4444</p>
            </div>


            <div class="loja">
                    <h3>Santa Catarina</h3>
                    <p>Rua Major, 370</p>
                    <p>Vila Mariana</p>
                    <p>(47) 5555-5555</p>
            </div>
         </main>   
       
      <footer id="rodape">
        <p id="formas-pagamento"><b>Formas de pagamentos:</b></p>
        <img src="./img/formas-pagamentos.jpg" width="350px">
        <p>&copy; Recode Pro</p>
      </footer>
    </div>
    </body>
</html>