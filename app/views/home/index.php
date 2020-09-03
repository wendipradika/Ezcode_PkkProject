<?php 
    if($_SESSION['status'] != 'login'){
        unset($_SESSION['status']);
        header('location:'.BASEURL);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1>WELCOME TO COVID MEDIA SHARE</h1>

    <a href="<?=BASEURL?>/home/logout">Log out</a>
</body>
</html>