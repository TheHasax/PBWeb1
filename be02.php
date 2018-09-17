<?php
    $myArray = array();
    foreach($_POST as $key => $val) {
        if ($key != 'sub') {
            if (! is_numeric($val)) {
                continue;
            }
            $myArray[] = (int)$val;
        }
    }
    
    $minValue = min($myArray);
    $maxValue = max($myArray);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            printf("<p>The smallest number is: %s</p>\n", $minValue);
            printf("<p>The largest number is: %s</p>\n", $maxValue);
        ?>
        <p>
            <a href="./be02.html">Get new numbers</a>
        </p>
    </body>
</html>