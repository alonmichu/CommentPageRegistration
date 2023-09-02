<?php
    require __DIR__ . '/database.php';
    $hostname = "localhost";
    $bancodedados ="meuteste";
    $usuarios = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuarios, $senha, $bancodedados);
    if ($mysqli->connect_errno)
    {
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno; 
    }
    else
    {
        echo "conectado ao banco de dados";
        //create_comments_table($hostname, $usuarios, $senha, $bancodedados);
        /*echo add_comment($hostname, $usuarios, $senha,
        $bancodedados, "a", "aaaaaa");*/
        /*delete_comment(3, $hostname, $usuarios, $senha, $bancodedados);*/
        $rows = show_comments($hostname, $usuarios, $senha, $bancodedados);
        print("<br>");
        foreach ($rows as $row)
        {
            print("Date: " . $row['comment_date'] . "; Name: " . $row['commentor_name'] . "; 
            Comment: " . $row['comment_text'] . "<br>");
        }
        $row = show_comment(1, $hostname, $usuarios, $senha, $bancodedados);
        print("Date: " . $row['comment_date'] . "; Name: " . $row['commentor_name'] . "; 
        Comment: " . $row['comment_text'] . "<br>");
    }
?>