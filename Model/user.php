<?php

function createUserDb($conn, $name, $email, $pass){
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $pass);

    $sql = "INSERT INTO crud(nome, email, senha) VALUES(?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        exit('SQL error');
    }
    mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $pass);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
    return true;
}

?>