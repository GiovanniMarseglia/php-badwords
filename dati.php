<?php
    $campo=$_POST["campo"];
    $censura=$_POST["censura"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p> <?php echo $campo;?>  <?php echo strlen($campo); ?> </p>
<p> <?php echo str_replace($censura,"***",$campo); ?> <?php echo strlen($campo); ?> </p>
</body>
</html>