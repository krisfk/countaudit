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
    $message='fdsfdffdsfshaha<img title="test" alt="test" src="https://a5living.com/wp-content/uploads/2021/07/LOGO%EF%BC%BFSQUARE.png" style="width:400px;height:400px;">';
    wp_mail( $to, $subject, $message );
    
    ?>
    <!-- <img src="http://64.227.13.14/countaudit/wp-content/uploads/2022/03/octobus.jpeg"> -->
</body>

</html>