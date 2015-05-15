<?php

namespace Services;

class FindService 
{
    
    public function Get() {
        try {
            $dbuser="onobiz";
            $dbpass="Password123";
            $database="mikedb";
            $dbuser="mike2";
            $dbpass="p0rn2000!";
            $mysqlhost="localhost:3306";
            $pdo = new \PDO("mysql:host=$mysqlhost;dbname=$database", $dbuser, $dbpass);
        } catch (Exception $ex) {
            echo "PDO ERROR: " . $ex->getMessage();
        }
    }
}

?>