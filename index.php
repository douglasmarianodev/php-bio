<!--session_start deve ser sempre colocado antes de todo o código para que ele exexute e repasse todos os seus recursos para o navegador! -->
<?php 
    session_start();   //este código não fica visível no navegador para o clinte, é uma linguagem de back-end!
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Formulário para inscrição!</p>

    <form action="script.php" method="post">
        <?php                                                      //? entra na condição e retonra, o : não entra na condição 
            $mensagemdeErro = isset($_SESSION[ 'mensagem-de-erro' ]) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($mensagemdeErro)){
                echo $mensagemdeErro;
            }
         ?>
        <p>Seu nome <input type="text" name="name"></p>
        <p>Sua idade <input type="text" name="age"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>

</body>
</html>