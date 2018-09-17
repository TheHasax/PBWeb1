<?php
    foreach($_POST as $key => $val) {
        if ($key != 'sub') {
            if (! is_numeric($val)) {
                header("Location: ./be01.xhtml");
            }
            $$key = (int)$val;
        }
    }
    
    $maximal = $no1;
    if ($no2 > $maximal) $maximal = $no2;
    if ($no3 > $maximal) $maximal = $no3;
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <div id="primary">
            <div class="wrapper">
                <?php
                    printf("<p>the biggest number is: %s</p>\n", $maximal);
                ?>
                <p>
                    <a href="./be01.xhtml">Get new numbers</a>
                </p>
            </div>
        </div>
    </body>
</html>
