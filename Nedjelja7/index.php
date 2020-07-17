<?php

include_once 'functions.php';

$jsonString = file_get_contents('newdata.json');
$data = json_decode($jsonString, false);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data->head->title ?></title>
    <meta name="description" content="<?= $data->head->description ?>">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
    <div class="landing">
        <img src="<?= $data->landing->img ?>" alt="<?= $data->landing->title ?>">
        <h1><?= $data->landing->title ?></h1>
        <p>
            <?= $data->landing->text ?>
        </p>
    </div>

    <div class="courses">
        <?= renderCourses($data->courses) ?>
    </div>

    <?= renderForm($data->contact_form)?>

</body>

</html>