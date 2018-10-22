<?php
    require_once 'includes/dbparams.inc.php';
    require_once 'includes/dbconnect.inc.php';
    require_once 'includes/Country.inc.php';
    require_once 'includes/City.inc.php';
    $title = 'Read and Display Countries, IBA WebDev';
    $lo = isset($_GET['lo']) ? $_GET['lo'] : 'U';
    $hi = isset($_GET['hi']) ? $_GET['hi'] : 'V';
    $countries = array();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
    </head>
    <body>
<?php
    printf("        <h1>%s</h1>\n", $title);
    
    $sql = "select code, co.name coname, continent, region, co.population copop";
    $sql .= ", cap.id, cap.name capname, cap.population cappop";
    $sql .= " from country co";
    $sql .= " join city cap on id = capital";
    $sql .= " where code between :lo and :hi";
    try {
        $q = $dbh->prepare($sql);
        $q->bindValue(':lo', $lo);
        $q->bindValue(':hi', $hi);
        $q->execute();
        while ($row = $q->fetch()) {
            $c = new Country($row['code'], 
                             $row['coname'],
                             $row['continent'],
                             $row['region'],
                             $row['copop'],
                    '','', new City($row['id'], 
                                    $row['capname'],
                                    $row['code'],
                                    '', $row['cappop']));
            $countries[] = $c;
        }
    } catch(PDOException $e) {
        printf("<p>%s</p>\n", $e->getMessage());
    }
    
    if (count($countries) > 0) {
        print("        <div>\n");
        foreach ($countries as $country) {
            printf($country);
        print("        </div>\n");
        }
    } else {
        print("        <p>no countries</p>\n");
    }
?>
    </body>
</html>