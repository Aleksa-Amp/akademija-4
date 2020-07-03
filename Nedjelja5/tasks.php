function ageToDays($age){
    echo $age * 365;
}

function getMax($arr){
    $max = max($arr);
    $index = array_search($max, $arr);
    echo 'Najveci broj je: ' . $max . ' na poziciji: ' . $index;
}

function reverseStr($str){
    $arr = epxlode(" ", $str);
    array_reverse($arr);
    echo 'Rezultujuci string je: ' . join(' ', $arr);
}

function sortArr($arr){
    sort($arr);
    print_r($arr);
    rsort($arr);
    print_r($arr);
}