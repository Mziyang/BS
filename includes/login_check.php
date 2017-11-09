<?php
/**
 * Created by PhpStorm.
 * User: tobymao
 * Date: 09/11/2017
 * Time: 11:49 PM
 */
if(!session_id()){ session_start();}
if(!isset($_SESSION['login_user'])){
    header('location:../customer/login.php');
}




?>
