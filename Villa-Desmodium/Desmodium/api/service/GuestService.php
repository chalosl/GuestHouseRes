<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 7:22 PM
 */

require_once __DIR__."/../business/impl/GuestBoImpl.php";
require_once __DIR__."/../core/Guest.php";

$guestBO = new GuestBoImpl();
//var_dump($_POST);

$method = $_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo  json_encode($guestBO->getAllGuests());
        break;
    case "POST":
        $name = $_POST["CustName"];
        $country = $_POST['custCountry'];
        $email = $_POST["custEmail"];
        $passport = $_POST["custPassPort"];
        $mobile = $_POST["custMobile"];
        $tempPack = new Guest($name, $country,$email,$passport,$mobile);
        $resp = $guestBO->addGuest($tempPack);
        echo $resp;
//        echo "myname";
        break;

}