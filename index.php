<?php require __DIR__ . '/send_comment.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class=" bloco">
        <h1>Minha Foto</h1>
        
        <img class="imag" src="Coelho.jpg" alt="Minha Foto">
    
        <div class="comment-section">
        
        <form method="POST" action="">
        <h2>Comentários</h2>

            <div class="label">
                <label form="nome">Nome:</label><br>
                <input class="inp01" type="text" name="nome" required><br>

                <label form="comentario">Comentário:</label><br>
                <textarea class="inp02" name="comentario" required></textarea><br>

                <input class="enviarCom" type="submit" name="send" value="Enviar Comentário">
            </div>

        </form>

       
    </div>
     <!-- Seção para exibir os comentários -->
        <!-- Você pode adicionar os comentários dinamicamente a partir do banco de dados aqui -->
        <div class="comment">
                <?php foreach ($comments as $str) { ?>
                    <h3><?php echo $str['commentor_name']; ?></h3>
                    <p><?php echo $str['comment_text']; ?></p>
                <?php } ?>
            <h3>Nome Usuário</h3>
            <p>Este é um comentário de exemplo.</p>
        </div>
</body>
</html>
<?php
    if (!empty($_POST))
    {
        //require __DIR__ . '/database.php';
        $hostname = "localhost";
        $bancodedados ="meuteste";
        $usuarios = "root";
        $senha = "";
        $commentor_name =  $_POST['nome'];
        $comment_text = $_POST['comentario'];
        add_comment($hostname, $usuarios, $senha, $bancodedados,
                    $commentor_name, $comment_text);
    }
?>