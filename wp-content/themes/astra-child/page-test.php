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
    $message='fdsfdffdsfs<img src="http://64.227.13.14/testwp/wp-content/uploads/2022/03/octobus.jpeg" style="width:300px;height:300px;">';
    wp_mail( $to, $subject, $message );
    
    ?>
    <!-- <img src="http://64.227.13.14/countaudit/wp-content/uploads/2022/03/octobus.jpeg"> -->
</body>

</html>