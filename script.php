<?php

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
if(empty($name)) {
    echo 'o nome não pode ser vazio';
    return;
}

// strlen valida a quantidade de caracteres no campo

if(strlen($name) < 3  ) {
    echo 'o nome deve conter mais de 3 caracteres!';
    return; 

}


// strlen 
if(strlen($name) > 20 ) {
    echo 'o nome é muito extenso!';
    return;
}



// aqui o campo idade está passando com string, mas a função abaixo garante que apenas passe números!
if(!is_numeric($age)){
    echo 'Os dados do campo idade precisam ser números!';
    return;
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