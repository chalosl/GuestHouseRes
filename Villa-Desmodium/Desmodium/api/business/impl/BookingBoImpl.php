<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:41 AM
 */

require_once __DIR__."/../BookingBo.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Booking.php";
require_once __DIR__."/../../repo/impl/BookingRepoImpl.php";

class BookingBoImpl implements BookingBo
{

    public function addBooking(Booking $booking): bool
    {
        $connection =(new DBConnection())->getDBConnection();
        $bookingRepo = new BookingRepoImpl();
        $bookingRepo ->setConnection($connection);
        return $bookingRepo->addBooking($booking);
        echo "Bo";
    }

    public function getAllBookings(): array
    {
        $connection =(new DBConnection())->getDBConnection();
        $bookingRepo = new BookingRepoImpl();
        $bookingRepo ->setConnection($connection);
        return $bookingRepo->getAllBookings();
    }
}