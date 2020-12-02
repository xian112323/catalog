<?php
    $hn = 'localhost';
    $un = 'xian';
    $pw = '0122372273xian';
    $db = 'publications';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die("Fatal Error");

?>