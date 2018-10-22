<?php
    require_once 'includes/Country.inc.php';
    require_once 'includes/Inhabitant.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inhabitant testprogram</title>
        <style>
            table, td {
                border: 1px solid blue;
            }
        </style>
    </head>
    <body>
        <?php
        $denmark = new Country('DK', 'Danmark',
                               'Danmark', 'DNK', 1);
        
        $pers1 = new Inhabitant(123, 'Niels', 'Larsen',
                8270, $denmark, 38);
        $pers2 = new Inhabitant(456, 'Peter', 'Müller',
                8660, $denmark, 33);
        $pers3 = new Inhabitant(789, 'Marlene', 'Mikkelsen',
                6000, $denmark, 27);
        printf("<h3>%s</h3>\n", $denmark->getName());
        print("<table>\n");
        printf("<tr>%s</tr>\n", $pers1);
        printf("<tr>%s</tr>\n", $pers2);
        printf("<tr>%s</tr>\n", $pers3);
        print("</table>\n");
        
        printf("<p>Who: %s: tax %s</p>\n", $pers3->getSsn(), $pers3->getTaxPct());
        $pers3->setTaxPct(49);
        printf("<p>Who: %s: tax %s</p>\n", $pers3->getSsn(), $pers3->getTaxPct());
        
        print_r($pers3->getSsn());
        echo '<br/>';
        var_dump($pers3->getSsn());
        ?>
    </body>
</html>