<!DOCTYPE html>
        <?php
                    try {
            $dbuser="onobiz";
            $dbpass="Password123";
            $database="mikedb";
            $dbuser="mike2";
            $dbpass="p0rn2000!";
            $mysqlhost="localhost:3306";
            $pdo = new PDO("mysql:host=$mysqlhost;dbname=$database", $dbuser, $dbpass);
        } catch (Exception $ex) {
            echo "PDO ERROR: " . $ex->getMessage();
        }
        
        
            spl_autoload_register();
            $svc = new \Services\FindService();
            $svc->Get();
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>HELLO</h1>
    </body>
</html>
