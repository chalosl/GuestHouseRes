<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/8/2018
 * Time: 2:44 AM
 */

require_once __DIR__."/../business/impl/LoginBoImpl.php";
require_once __DIR__."/../core/Login.php";

$userBo = new LoginBoImpl();

$method = $_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo  json_encode($userBo->getAllUsers());
        break;
    case "POST":

        break;
}