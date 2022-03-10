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
    $message='fdsfdfs<img src="https://countaudit.hk/wp-content/uploads/2020/01/Untitled-2-300x62.png">';
    wp_mail( $to, $subject, $message );
    
    ?>
</body>

</html>