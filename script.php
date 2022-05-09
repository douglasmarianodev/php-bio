<?php



session_start();

$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'indefinida';

$name = $_POST['name'];
$age = $_POST['age'];

// var_dump($name);
// var_dump($age);

// agora vamos tratar os dados que passam pelo formulário função empty verifica se o campo está vazio

/// agora colocamos um header location para o caso a condição seja verdadeira, o usuário ser redirecionado para o index.php
// No lugar do return trocar por header(string: 'location: index.php')
if(empty($name)) {
    $_SESSION['mensagem-de-erro'] =  'O campo nome não pode ser vazio, por favor prencha-o com o seu nome!';
    header('Location: index.php');
    return;
}

// strlen valida a quantidade de caracteres no campo

else if(strlen($name) < 3  ) {
    $_SESSION['mensagem-de-erro'] =  'Preencha um nome acima de 3 caracteres!';
    header('Location: index.php');
    return;
}


// strlen 
else if(strlen($name) > 20 ) {
    $_SESSION['mensagem-de-erro'] =  'Seu nome deve conter menos de 20 caracteres!';
    header('Location: index.php');
    return;
}



// aqui o campo idade está passando com string, mas a função abaixo garante que apenas passe números!
if(!is_numeric($age))
{
    $_SESSION['mensagem-de-erro'] =  'Sua idade precisa ser em núremos!';
    header('Location: index.php');
    return;
}






if($age >= 6 && $age <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {                                                                                               //aqui concatena strings e variáveis colocando . antes e depois
        if($categorias[$i] == 'infantil')
        {
            $_SESSION['mensagem-de-sucesso'] = "<h2>O " .$name. " tem " .$age. " anos, por isso pode competir na categoira " .$categorias[$i]. "!</h2>";
             header('Location: index.php');
             return;
        }
    }
}

else if($age >= 13 && $age < 18 ){
    
    for($i = 0; $i <= count($categorias); $i++)
        {
        if($categorias[$i] == 'adolescente' )
        {
            $_SESSION['mensagem-de-sucesso'] = "<h2>O " .$name. " tem " .$age. " anos, por isso pode competir na categoira " .$categorias[$i]. "!</h2>";
             header('Location: index.php');
             return;
        }
    }

}else {

    for($i = 0; $i <= count($categorias); $i++)
        {
        if($categorias[$i] == 'adulto' )
        {
            $_SESSION['mensagem-de-sucesso'] = "<h2>O " .$name. " tem " .$age. " anos, por isso pode competir na categoira " .$categorias[$i]. "!</h2>";
             header('Location: index.php');
             return;
        }
    }
}