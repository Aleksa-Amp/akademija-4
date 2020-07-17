<?php

$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, false);

function renderCourses($courses){
    $html = '';
    foreach($courses as $course){
        $visiblityClass = $course->open_for_submissions ? "" : "hidden";

        $html .= <<< HTML
            <div class="card">
                <h2>$course->title</h2>
                <img src="$course->img" alt="$course->title">
                <div class="on-hover">
                    <p>
                        <b>Mentor:</b> $course->mentor <br>
                        <b>Broj polaznika:</b> $course->total_students <br>
                        <b>Broj generacija:</b> $course->generations <br>
                    </p>
                    <button class="$visiblityClass">Prijavi se</button>
                </div>
            </div>
HTML;
    }

    return $html;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data->pageTitle ?></title>
    <meta name="description" content="<?= $data->pageDescription ?>">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="landing">
        <h1><?= $data->landing->title ?></h1>
        <p><?= $data->landing->description ?></p>
        <img src="<?= $data->landing->img ?>" alt="<?= $data->landing->imgAlt ?>">
    </div>

    <div class="courses">
        <?= renderCourses($data->courses);?>
    </div>
    <div class="about">
    </div>
</body>

</html>