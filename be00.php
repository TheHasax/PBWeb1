<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <div id="primary">
            <div class="wrapper">
                <?php
                    ini_set("display_errors", "On");
                    ERROR_REPORTING(E_ALL);
                    // create n X n matrix
                    function createMatrix(&$matrix, $n) {
                        for ($i = 0; $i < $n; $i++) {        // down
                            for ($j = 0; $j < $n; $j++) {    // across
                                $matrix[$i][$j] = 0;
                            }
                        }
                        for ($i = 0; $i < count($matrix); $i++) {
                            $matrix[$i][$i] = 1;
                        }
                    }
                    // read the n from GET
                    // print a matrix
                    function printMatrix($matrix) {
                        print("\n        <p>\n");
                        for ($i = 0; $i < count($matrix); $i++) {        // down
                            for ($j = 0; $j < count($matrix); $j++) {    // across
                                printf("%s ", $matrix[$i][$j]);
                            }
                            print("            <br/>\n");
                        }
                        print("        </p>\n");
                    }
                    $i = isset($_GET['antal']) ? $_GET['antal'] : 3;
                    $arr = array();
                    createMatrix($arr, $i);
                    printMatrix($arr);
                ?>
            </div>
        </div>
    </body>
</html>
