<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" enctype="multipart/form-data">

        <input name="email" type="email" placeholder="Email" /> <br/>

        <input name="submit" type="submit"/>

    </form>

    <?php
    
        if(isset($_POST['submit'])){
            echo 'Ovo je email: ' . $_POST['email'];
        }

    ?>

</body>

</html>