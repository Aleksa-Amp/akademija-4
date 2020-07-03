<?php

//String
$str = 'Ovo je test';
//Broj
$num = 5;
//Decimalni broj
$dec = 5.12;
//Boolean
$bol = true;  //false
//NULL
$nul = null;
//Niz
$arr = ['1', 12 ,34.5, true];
//Asocijativni niz
$assocArr = ['name' => 'John', 'surname' => 'John', 'age' => 'John'];
print_r($assocArr);
echo 'Naziv je: ' . $assocArr['age'];

//Funkcije
// $pi = 3.14;
function calculate($firstNum, $secondNum){
    $res = $firstNum + $secondNum;
    return $pi;
}

// echo calculate(5, 3);


//Statements


function isFive($num){
    if($num == 5){
        return true;
    }else{
        return false;
    }
}

function isSix($num){
    if($num == 6){
        return true;
    }else{
        return false;
    }
}

// function calculate($num){
//     if($num < 0){
//         echo 'Manje je od 0';
//     }else if($num == 0){
//         echo 'Jednako je 0';
//     }else if(isFive($num)){
//         echo 'Jednako je 5';
//     }else{
//         echo 'Vece je od 0';
//     }
// }

function calculateDay($num){
    switch($num){
        case 1:
            echo 'Ponedljeljak';
            break;
        case 2:
            echo 'Utorak';
            break;
        default:
            echo 'Srijeda';
    }
}

function getArr($arr){
    for($i = 0; $i < count($arr); $i++){
        echo 'Element niza na poziciji: ' . $i . ' je: ' . $arr[$i];
    }
}

function getArrWhile($arr){
    $i = 0;
    while($i < count($arr)){
        echo 'Element niza na poziciji: ' . $i . ' je: ' . $arr[$i];
        $i++;
    }
}

// calculate(5);
// calculateDay(2);
// getArr(['Prvi', 'Drugi', 'Treci']);
getArrWhile(['Prvi', 'Drugi', 'Treci']);


//Nativne String funkcije:

$str = 'john smith';
    // echo 'Broj karaktera je: ' . strlen($str);
    
    // echo 'Karakter na poziciji 0 je: ' . $str[5];
    
    // echo strtolower($str);
    // echo strtoupper($str);
    // echo ucfirst($str);
    // echo ucwords($str);
    
    $arr = explode(' ', $str);
    // echo $arr[1];
    
    // echo implode('-', $arr);
    // $htmlVar = '<b>Test</b>';
    // echo $htmlVar;
    // echo strip_tags($htmlVar);
    
    echo substr($str, 5, 2);


    //Math, arr fn

    $num = 5.7;
    // echo ceil($num);
    // echo floor($num);
    // echo round($num);
    // echo rand(0, 10);
    
    $arr = [0, 1, 2, 3, 5];
    $arr[count($arr)] = 6;
    array_push($arr, 7);
    
//   echo in_array(3, $arr) ? 'Unutar niza je' : 'Nije unutar niza';
$str = 'Ovo je test string';
   echo strpos($str, '123') !== false ? 'Nalazi se u string-u' : 'Ne nalazi se';
    
    // print_r($arr);