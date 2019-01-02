<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 12:45 PM
 */

require_once __DIR__."/../business/impl/BookingBoImpl.php";
require_once __DIR__."/../core/Booking.php";

$bookingBo = new BookingBoImpl();

$method =$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo  json_encode($bookingBo->getAllBookings());
        break;
    case "POST":
        $id = $_POST["guestid"];
        $checkin = $_POST['checkIn'];
        $checkout = $_POST["checkOut"];
        $adults = $_POST["adult"];
        $children = $_POST["children"];
        $pack = $_POST["Pack"];
        $pay = $_POST["payment"];
        $tempPack = new Booking($checkin,$checkout,$adults,$children,$pack,$id,$pay);
        $resp = $bookingBo->addBooking($tempPack);
        echo $resp;
//        echo "My";
        break;
}