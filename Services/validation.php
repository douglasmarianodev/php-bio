<?php 

///                                 este bool tipa a função 

function ValidateName(string $name) : bool {
    if(empty($name)) {
        SetErrorMessage( "O campo nome não pode ser vazio, por favor prencha-o com o seu nome!");
        return false;
    }
    
    // strlen valida a quantidade de caracteres no campo
    
    else if(strlen($name) < 3  ) {
        SetErrorMessage('Preencha um nome acima de 3 caracteres!');
        // removemos o header('Location: index.php'); por que será chamado por outro script  
        return false;
    }
    
    
    // strlen 
    else if(strlen($name) > 20 ) {
        SetErrorMessage('Seu nome deve conter menos de 20 caracteres!');

        return false;
    }
        // retornará o valor se nenhum dos casos acima acontecer!
        return true;
}

function ValidateAge(string $age) : bool {
    
    if(!is_numeric($age))
        {
            SetErrorMessage('Sua idade precisa ser em núremos!') ;

            return false;
        }

        return true;
}

