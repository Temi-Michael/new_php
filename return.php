<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 

    function cube($num) {
        return pow($num, 2);
    }
    
    $cubeResult = cube(5);
    echo $cubeResult;
    
    ?>
</body>
</html>