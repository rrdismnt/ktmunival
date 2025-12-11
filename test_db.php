<?php
require_once __DIR__ . '/db.php';
if(isset($GLOBALS['pdo']) && $GLOBALS['pdo'] instanceof PDO){
    echo "PDO OK\n";
    try{
        $stmt = $GLOBALS['pdo']->query("SELECT NOW() as now");
        $r = $stmt->fetch();
        echo "DB time: " . ($r['now'] ?? 'no time');
    } catch (Exception $e){
        echo "Query error: ".$e->getMessage();
    }
} else {
    echo "PDO not available\n";
}
