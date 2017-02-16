<?php
/**
 * Created by PhpStorm.
 * User: juanks
 * Date: 10/02/17
 * Time: 18:06
 */
require "mydb.php";
$email = $_POST['email'];
$password = $_POST['password'];
if (isset($email, $password) && !empty($email) && !empty($password)) {

    $res = get_result_user("select * from mw_user where email = '" . $email . "' and password = '" . $password . "';");
    if (!empty($res)) {
        header("location: notas.php?email=" . urlencode($_POST['email']));
    }else{
        header("location: login.php?nouser=1");
    }
}


