<?php
    require __DIR__ . '/database.php';
    $hostname = "localhost";
    $bancodedados ="meuteste";
    $usuarios = "root";
    $senha = "";
    $reverse_comments = show_comments($hostname, $usuarios, $senha, $bancodedados);
    $comments = array_reverse($reverse_comments);
    require_once('index.php'); // to make variables visible in index.phps
?>