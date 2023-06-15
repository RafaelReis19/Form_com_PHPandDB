<?php
    //Diferença na string de um hash md5 para um password hash, muito legal.
    $senha="universidade";
    $senha_md5=md5($senha);
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
    $hashed_gerada='$2y$10$ZNDPnpJdOkSDXmDeGyj59uoC2TzhzYs.wCMyqFHAyVNqpWqYidfRu';
    echo "Tamanho da string: ".strlen($senha_md5)." caracteres - <b>$senha_md5</b><br>";
    echo "Tamanho da string: ".strlen($hashed_password)." caracteres -
    <b>$hashed_password</b><br>";

    if(password_verify($senha, $hashed_gerada)){
        echo "<hr>Senha ok!";
    }
?>