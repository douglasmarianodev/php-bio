<?php

session_start();

function DefineCategory(string $name, string $age) : ?string  {

    $category = [];
    $category[] = 'infantil';
    $category[] = 'adolescente';
    $category[] = 'adulto';
    $category[] = 'indefinida';
    // reparque que aqui já fica mais clean e funciona apenas se validar os dois.
    if( ValidateName($name) && ValidateAge($age)){
        RemoveErrorMessage();
        if($age >= 6 && $age <= 12)
        {
            for($i = 0; $i <= count($category); $i++)
            {                                                                                               //aqui concatena strings e variáveis colocando . antes e depois
                if($category[$i] == 'infantil')
                {
                    SetSuccessMessage("<h2>" .$name. " tem " .$age. " anos, por isso pode competir na categoira " .$category[$i]. "!</h2>");
                    return null;
                }
            }
        }

        else if($age >= 13 && $age < 18 ){
             
            for($i = 0; $i <= count($category); $i++)
                {
                if($category[$i] == 'adolescente' )
                {
                    SetSuccessMessage("<h2>" .$name. " tem " .$age. " anos, por isso pode competir na categoira " .$category[$i]. "!</h2>");
                    return null;
                }
            }

        }else {

            for($i = 0; $i <= count($category); $i++)
                {
                if($category[$i] == 'adulto' )
                {
                    SetSuccessMessage("<h2>" .$name. " tem " .$age. " anos, por isso pode competir na categoira " .$category[$i]. "!</h2>");
                    return null;
                }
            }
        }
    }
    else {

        return RemoveSuccessMessage(); 
        return GetErrorMessage();
    }
       
}