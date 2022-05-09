<?php

$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'indefinida';

$nome = 'Eduardo';
$idade = '18';

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {                                                                                               //aqui concatena strings e variáveis colocando . antes e depois
        if($categorias[$i] == 'infantil')
            echo "<h2>o nadador ",$nome. " tem ", $idade. " anos, por isso compete na categoria " .$categorias[$i]. " !</h2>";
        }
}

elseif($idade >= 13 && $idade < 18 ){
    
    for($i = 0; $i <= count($categorias); $i++)
        {
        if($categorias[$i] == 'adolescente' )
        echo "<h2>o nadador " ,$nome. " tem ", $idade. " anos, por isso compete na categoria " .$categorias[$i]. " !</h2>";
        }

}else {

    for($i = 0; $i <= count($categorias); $i++)
        {
        if($categorias[$i] == 'adulto' )
        echo '<h2>Este nadador tem ' ,$idade. ' anos, por isso compete na categoria ' .$categorias[$i]. " !</h2>";
         }
}
