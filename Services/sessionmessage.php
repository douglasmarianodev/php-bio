<?php

session_start();
    ///SETANDO MENSAGEM DE ERRO E SUCESSO

// SETANDO MENSAGEM DE SUCESSO!

function SetSuccessMessage(string $message) : void {
    $_SESSION['success-message'] = $message;
}


function GetSuccessMessage() : ?string {

    if(isset($_SESSION['success-message']))
        return $_SESSION['success-message'];

        return null;
}



    // esta função não devolve nada
function SetErrorMessage(string $ErrorMessage) : void {
    $_SESSION['error-message'] = $ErrorMessage;
}

// essa função devolve o error ou null
function GetErrorMessage    () : ?string {

    if(isset($_SESSION['error-message']))
        return $_SESSION['error-message'];

        return null;
}


// função que limpa as sessões!

function RemoveErrorMessage() : void {
    if(isset($_SESSION['error-message']))
        unset($_SESSION['error-message']);
}


function RemoveSuccessMessage() : void {
    if(isset($_SESSION['success-message']))
        unset($_SESSION['success-message']);  // aqui verificamos se a mensagem esta setada a eliminamos
}






