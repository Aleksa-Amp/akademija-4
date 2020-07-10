<?php 

$jsonStr = file_get_contents('ram.json');
$jsonArr = json_decode($jsonStr, true);
//ako dodam jos jedan parametar => true, vratice associjativni array, u suprotnom vraca
//objekat/objekte
$characters = [];
$secondCharactersArray = [];

// print_r($jsonArr);

for($i = 0; $i < count($jsonArr); $i++){
    // kreiram genericku klasu i rucno stavljam atribute koje hocu
    $character = new stdClass;
    $character->name = $jsonArr[$i]['name'];
    $character->id = $jsonArr[$i]['id'];
    //mogu i da promijenim naziv atributa
    $character->custom_element = $jsonArr[$i]['image'];

    // ili kastujem clan niza direktno u objekat(time se povlace sva polja koja su u json objektu)
    $secondCharactersObj = (object) $jsonArr[$i];
    array_push($characters, $character);
    array_push($secondCharactersArray, $secondCharactersObj);

}

print_r($characters);
echo '<br/>' . $characters[0]->name . ' and id: ' . $characters[0]->id . '<br/>';
print_r($secondCharactersArray);
echo '<br/>' . $secondCharactersArray[0]->name . ' and id: ' . $secondCharactersArray[0]->id . '<br/>';

//foreach za niz objekata
foreach($characters as $obj){
    echo '<br/>' . $obj->name . ' and id: ' . $obj->id . '<br/>';
}

// foreach za associjativni niz
$arr = ['name' => 'Rick', 'surname' => 'Sanchez', 'id' => 5];
foreach($arr as $key => $value){
    echo '<br/> Kljuc je: ' . $key . ", vrijednost je " . $value . '<br/>';
}


//json decode bez drugog parametra (boolean) pretvara elemente u objekte
$secondJsonArr = json_decode($jsonStr);

foreach($secondJsonArr as $characterObj){
    echo '<br/>' . $characterObj->name . ' and id: ' . $characterObj->id . '<br/>';
}
