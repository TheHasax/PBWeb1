<?php
/**
 * @author nml
 * example from textbook, Doyle, 2010
 */
    require_once './includes/Sellable.inc.php';
    require_once './includes/Television.inc.php';
    require_once './includes/TennisBall.inc.php';
    require_once './includes/StoreManager.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testing Interface, OO PHP</title>
    </head>
    <body>
<?php
    $tv = new Television();
    $tv->setScreenSize(42);
    
    $ball = new TennisBall();
    $ball->setColor('yellow');
    
    $manager = new StoreManager();
    $manager->addProduct($tv);
    $manager->addProduct($ball);
    $manager->stockUp();
    
    printf("<p>There are %s %s-inch televisions and %s "
            . "%s tennis balls in stock.</p>\n"
            , $tv->getStockLevel()
            , $tv->getScreenSize()
            , $ball->getStockLevel()
            , $ball->getColor());

    print("<p>Selling a television ...</p>\n");
    $tv->sellItem();
    print("<p>Selling two tennis balls...</p>\n");
    $ball->sellItem();
    $ball->sellItem();
    
    printf("<p>There are now %s %s-inch televisions and %s "
            . "%s tennis balls in stock.</p>\n"
            , $tv->getStockLevel()
            , $tv->getScreenSize()
            , $ball->getStockLevel()
            , $ball->getColor());
?>
    </body>
</html>