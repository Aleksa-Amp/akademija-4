<?php 

$jsonStr = file_get_contents('posts.json');

// echo $jsonStr;
$jsonVar = json_decode($jsonStr);

$myJsonObject = '{
    "userId": 1,
    "id": 1,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
}';

// print_r($jsonVar);

// echo 'Title prvog posta je: ' . $jsonVar[1]->title;

// json_encode();

$jsonObj = json_decode($myJsonObject);

// print_r($jsonObj);

$assocArr = ['name' => 'John', 'surname' => 'Smith', 'age' => 25];
// print_r($assocArr);
// echo '<br/>';
header('Content-type: Application/JSON');
echo json_encode($assocArr);