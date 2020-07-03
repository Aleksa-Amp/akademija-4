<?php

// echo 'Hello';

$method = $_SERVER['REQUEST_METHOD'];

// if($method == 'POST'){
//     echo 'Metoda je POST';
// }else {
//     echo 'Metoda je GET';
// }

// echo $_SERVER['REQUEST_METHOD'];

// print_r($_POST);

// echo '<br/>Ovo je email: ' . $_POST['email'] . '<br/> ime i prezime: ' . $_POST['fullName'] . ' <br/> godine; ' . $_POST['age'];


// print_r($_POST['color']);

// echo $_POST['color'][1];

// print_r($_FILES);

// print_r($_FILES);

// echo 'Naziv fajla je: ' . $_FILES['image']['size'];

// $imageName = time() . '_' . $_FILES['image']['name'];

// if(move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $imageName) == true){
//     echo 'Upload sucess';
// }else{
//     echo 'Error uploading file';
// }

// if(isset($_POST['email'])){
//     echo 'Ovo je email: ' . $_POST['email'];
// }

// if(empty($_POST['email'])){
//     echo 'Email je empty';
// }

// if(is_null($_POST['email'])){
//     echo 'Email je null';
// }

function isEmpty($input){
    if(!isset($input) || empty($input) || is_null($input)){
        return true;
    }
    return false;
}

if(isEmpty($_POST['email'])){
    echo 'Morate unijeti email';
}else{
    echo 'Email je: ' . $_POST['email'];
}

// empty($_POST['email']);
// is_null($_POST['email']);

// print_r($_FILES['image']);