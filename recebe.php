<?php
    include "conecta.php";
    //echo "<pre>";print_r($_POST);

    if(count($_POST)==0){
        echo "Formulário primeiro";
        exit();
    }
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
    $data = $_POST["data"];
    $obs = $_POST["obs"];


    $sql="
    insert into user values (null,'$login', '$hashed_password', '$email', '$data', '$obs')
    ";
    //echo $sql;
    $query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
    echo "<br>"."Insert OK!";
    mysqli_close($conn);
?>
<h5> Retornar ao <a href="form.html">Formúlario</a>.</h5>