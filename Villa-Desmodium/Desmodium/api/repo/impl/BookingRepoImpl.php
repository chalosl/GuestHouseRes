<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:44 AM
 */

require_once __DIR__."/../BookingRepo.php";
require_once __DIR__."/../../core/Booking.php";


class BookingRepoImpl implements BookingRepo
{
    private $connection;

    /**
     * BookingRepoImpl constructor.
     */
    public function __construct()
    {

    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addBooking(Booking $booking): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO Booking(CheckIN,CheckOut, Adults,Childrens, PackageName,GuestID,PaymentAmmount) VALUES(
                '{$booking->getCheckIn()}',
                '{$booking->getCheckOut()}',
                '{$booking->getAdults()}',
                '{$booking->getChildrens()}',
                '{$booking->getPackageName()}',
                '{$booking->getGuestId()}',
                '{$booking->getPaymentAmmount()}')");
//        echo "Chalo";
        echo mysqli_error($this->connection);
        return $resp;
    }

    public function getAllBookings(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM  Booking");
       return $resultset->fetch_all();
    }
}