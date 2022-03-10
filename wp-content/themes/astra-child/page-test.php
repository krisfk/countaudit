<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $to='krisfk@gmail.com';
    $subject='testing -subject';
    $message='fdsfdffdsfs<img src="https://i.ibb.co/SV0h427/octobus.jpg">';
    wp_mail( $to, $subject, $message );
    
    ?>
    <img src="https://i.ibb.co/SV0h427/octobus.jpg">
</body>

</html>