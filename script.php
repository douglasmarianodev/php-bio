<?php

include "Services/category.php";
include "Services/sessionmessage.php";
include "Services/validation.php";


$name = $_POST['name'];
$age = $_POST['age'];

DefineCategory($name, $age);
header('Location: index.php');


?>