<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    print ("using while loops <br>");
    $i = 15;
    while ($i <= 20) {
        print ("$i <br>");
        $i++;
    }
    
    print ("using do while loops <br>");
    $i=15;
    do {
        print ("$i <br>");
        $i++;
    } while ($i<=20);

    ?>
</body>

</html>