<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:42 AM
 */

require_once __DIR__."/../core/Booking.php";

interface BookingRepo
{
    public function setConnection(mysqli $connection):void;

    public function addBooking(Booking $booking):bool;

    public function getAllBookings():array ;

}