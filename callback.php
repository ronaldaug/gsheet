<?php

require_once 'config.php';

try {
    $adapter->authenticate();
    $token = $adapter->getAccessToken();
    $db = new DB();
    if($db->is_table_empty()) {
        $db->update_access_token(json_encode($token));
        echo "Login successfully.";
        echo "<br> <a href='logout.php'>Logout</a>";
    }
}
catch( Exception $e ){
    echo $e->getMessage() ;
}
