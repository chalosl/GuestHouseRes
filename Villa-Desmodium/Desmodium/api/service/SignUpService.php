<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 11:06 PM
 */

require_once __DIR__."/../business/impl/LoginBoImpl.php";
require_once __DIR__."/../core/Login.php";

$userBo = new LoginBoImpl();

$method = $_SERVER["REQUEST_METHOD"];
switch ($method){
    case "POST":
        $userName = $_POST["user"];
        $password = $_POST["psw"];
        $confirm = $_POST["psw-repeat"];
        $tempPack = new Login($userName, $password,$confirm);
        $resp = $userBo->addUser($tempPack);
        echo $resp;
        break;
}