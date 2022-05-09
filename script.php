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
}

// strlen valida a quantidade de caracteres no campo

if(strlen($name) < 3  ) {
    $_SESSION['mensagem-de-erro'] =  'Preencha um nome acima de 3 caracteres!';
    header('Location: index.php');

}


// strlen 
if(strlen($name) > 20 ) {
    $_SESSION['mensagem-de-erro'] =  'Seu nome deve conter menos de 20 caracteres!';
    header('Location: index.php');
}



// aqui o campo idade está passando com string, mas a função abaixo garante que apenas passe números!
if(!is_numeric($age)){
    $_SESSION['mensagem-de-erro'] =  'Sua idade precisa ser em núremos!';
    header('Location: index.php');
}

if(empty($age)){
    $_SESSION['mensagem-de-erro'] =  'O campo idade é obrigatório!';
    header('Location: index.php');
}




if($age >= 6 && $age <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {                                                                                               //aqui concatena strings e variáveis colocando . antes e depois
        if($categorias[$i] == 'infantil')
            echo "<h2>o nadador ",$name. " tem ", $age. " anos, por isso compete na categoria " .$categorias[$i]. " !</h2>";
        }
}

elseif($age >= 13 && $age < 18 ){
    
    for($i = 0; $i <= count($categorias); $i++)
        {
        if($categorias[$i] == 'adolescente' )
        echo "<h2>o nadador " ,$name. " tem ", $age. " anos, por isso compete na categoria " .$categorias[$i]. " !</h2>";
        }

}else {

    for($i = 0; $i <= count($categorias); $i++)
        {
        if($categorias[$i] == 'adulto' )
        echo '<h2>' .$name. " tem " ,$age. ' anos, por isso compete na categoria ' .$categorias[$i]. " !</h2>";
         }
}