<?php
    require_once '../Model/user.php';

    function createUserAction($conn, $name, $email, $pass){
        $createUserDb = createUserDb($conn, $name, $email, $pass);
    }
?>