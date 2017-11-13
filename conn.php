<?php
    error_reporting(1);

    $db = new mysqli("localhost", "root", "", "livremente");

    if($db->connect_error == true){
        echo "Erro de conexão:" . $db->connect_error . "<br />";
        exit;
    }
    
?>