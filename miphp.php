<?php
/*
isset = ¿existe esta variable?
Si es así, quiero que uses ese valor
de lo contrario
quiero que uses un valor predeterminado

*/
$aux = isset($_GET["aux"]) ? $_GET["aux"]:0 ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task8</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
    <div class = "content">
        <?php
        if ($aux == 1){
        ?>
        <div class = "btn btn-primary">opción 1</div>
        <?php
        }
        else{
        ?>
        <div class = "btn btn-danger">opción 2</div>
        <?php
        }
        ?>

    </div>
</body>
</html>




