<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/4/2018
 * Time: 12:04 PM
 */

require_once __DIR__."/../business/impl/PackagesBoImpl.php";
require_once __DIR__."/../core/Packages.php";

//var_dump($_POST);

$pakageBo = new PackagesBoImpl();


$method = $_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo  json_encode($pakageBo->getAllPackages());
        break;
    case "POST":
        $name = $_POST["packageName"];
        $tour = $_POST['packageTour'];
        $offers = $_POST["packageOffers"];
        $tempPack = new Packages($name, $tour, $offers);
        $resp = $pakageBo->addPackage($tempPack);
        echo $resp;
//        echo "chalo";
        break;

}