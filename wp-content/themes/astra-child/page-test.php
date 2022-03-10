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
    $message='<img src="https://a5living.com/wp-content/uploads/2021/08/Logo-1.png">';
    wp_mail( $to, $subject, $message );
    
    ?>
</body>

</html>