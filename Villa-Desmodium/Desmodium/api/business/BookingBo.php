<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:40 AM
 */

require_once __DIR__."/../core/Booking.php";


interface BookingBo
{
    public function addBooking(Booking $booking):bool;

    public function getAllBookings():array ;

}