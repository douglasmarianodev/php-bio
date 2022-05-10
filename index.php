<!--session_start deve ser sempre colocado antes de todo o código para que ele exexute e repasse todos os seus recursos para o navegador! -->
<?php 
  //este código não fica visível no navegador para o clinte, é uma linguagem de back-end!
    include "Services/sessionmessage.php";
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
        
        <?php   
        
            //? entra na condição e retonra, o : não entra na condição
            $messagesuccess = GetSuccessMessage();
            if(!empty($messagesuccess)){

                echo $messagesuccess;
            }

            $messageerror = GetErrorMessage();
            if(!empty($messageerror)){
                echo $messageerror;
            }

         ?>

        <p>Seu nome <input type="text" name="name"></p>
        <p>Sua idade <input type="text" name="age"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>

</body>
</html>