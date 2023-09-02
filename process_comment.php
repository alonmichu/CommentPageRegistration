<?php
    require __DIR__ . '/database.php';
    $hostname = "localhost";
    $bancodedados ="meuteste";
    $usuarios = "root";
    $senha = "";
	if (isset($_POST))
    {
        $commentor_name =  $_POST['nome'];
        $comment_text = $_POST['comentario'];
        add_comment($hostname, $usuarios, $senha,
        $bancodedados, $commentor_name, $comment_text);
        /*delete_comment(3, $hostname, $usuarios, $senha, $bancodedados);*/
        $rows = show_comments($hostname, $usuarios, $senha, $bancodedados);
        print("<br>");
        foreach ($rows as $row)
        {
            print("Date: " . $row['comment_date'] . "; Name: " . $row['commentor_name'] . "; 
            Comment: " . $row['comment_text'] . "<br>");
        }
        /*$row = show_comment(1, $hostname, $usuarios, $senha, $bancodedados);
        print("Date: " . $row['comment_date'] . "; Name: " . $row['commentor_name'] . "; 
        Comment: " . $row['comment_text'] . "<br>");*/
	}
    // TODO:  else should be text "try again later" or smth like that
?>