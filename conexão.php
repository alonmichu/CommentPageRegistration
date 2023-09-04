<?php
    include "database.php";
    $hostname = "localhost";
    $bancodedados ="meuteste";
    $usuarios = "root";
    $senha = "";
    $db = connect_mysql($hostname, $usuarios, $senha, $bancodedados);
    if($db === false)
    {
        die("Error: connection error. " . mysqli_connect_error());
    }
    /*if ($link != false)
    {
        $sql = "CREATE TABLE users (
        id int(11) unsigned NOT NULL AUTO_INCREMENT,
        name varchar(75) NOT NULL,
        password varchar(255) NOT NULL,
        email varchar(100) NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY email (email)
        ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;";
        $result = mysqli_query($link, $sql);
    }*/
    
?>