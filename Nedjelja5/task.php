<?php 

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo 'Greška';
    return;
}

function isEmpty($input){
    if(!isset($input) || empty($input) || is_null($input)){
        return true;
    }
    return false;
}

if(isEmpty($_POST['fullName'] || isEmpty($_POST['firstNumber'])) || isEmpty($_POST['secondNumber']) || isEmpty($_POST['operation'])){
    echo 'Morate unijeti sve podatke';
    return;
}

$res;

switch($_POST['operation']){
    case 'addition':
        $res = $_POST['firstNumber'] + $_POST['secondNumber'];
    break;
    case 'substraction':
        $res = $_POST['firstNumber'] - $_POST['secondNumber'];
    break;
    case 'multiplication':
        $res = $_POST['firstNumber'] * $_POST['secondNumber'];
    break;
    case 'deduction':
        $res = $_POST['firstNumber'] / $_POST['secondNumber'];
    break;
}

echo 'Korisnik: ' . $_POST['fullName'] . ' rezultat: ' . $res;