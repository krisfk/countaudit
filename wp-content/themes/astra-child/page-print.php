<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="header">


        <img src="<?php echo get_template_directory_uri();?>/assets/images/ca-print-logo.jpg" alt="">
    </div>




    <style type="text/css">
    @media screen {
        div.divFooter {
            display: none;
        }
    }

    @media print {
        div.divFooter {
            position: fixed;
            bottom: 0;
        }
    }
    </style>
</body>

</html>