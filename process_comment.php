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
        add_comment($hostname, $usuarios, $senha, $bancodedados,
                    $commentor_name, $comment_text);
	}
    // TODO:  else should be text "try again later" or smth like that
?>