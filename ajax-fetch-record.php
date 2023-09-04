<?php
    /*include "database.php";
    $id = $_POST['id'];
    $hostname = "localhost";
    $bancodedados ="meuteste";
    $usuarios = "root";
    $senha = "";
    $dbCon = connect_mysql($hostname, $usuarios, $senha, $bancodedados);
    $result = get_comment($id, $hostname, $usuarios, $senha, $bancodedados);
    $cust = mysqli_fetch_array($result);
    if ($cust) {
        echo json_encode($cust);
    } else {
        echo "Error: " . $sql . "" . mysqli_error($dbCon);
    }*/
    /*$hostname = "localhost";
    $bancodedados ="meuteste";
    $usuarios = "root";
    $senha = "";
    $mysqli = mysqli_connect($hostname, $usuarios, $senha, $bancodedados);
    if ($link != false)
    {
        print("Error: can't connect to MySQL " . mysqli_connect_error());
    }
    else
    {
        print("Connection succesful");
        mysqli_set_charset($link, "utf8");
        $result = mysqli_query($mysqli, "SELECT nome, comentario...add yourself");
        if ($result != false)
        {
            while ($row = $result->fetch_assoc())
            {
                echo "<li>{}...add yourself";
            }
        }
        else
        {
            echo "errno bla-blah";
        }
    }*/
?>