<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    form test <br>

    <?php
echo $_POST['item1'];
?>
    <form action="" method="post">

        <div>item1</div>
        <div><input type="text" name="item1">
        </div>
        <div>item2</div>

        <div><input type="text" name="item2">
        </div>
        <div> <input type="submit" value="s"></div>

    </form>


</body>

</html>