<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 7:20 PM
 */

require_once __DIR__."/../GuestBO.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Guest.php";
require_once __DIR__."/../../repo/impl/GuestRepoImpl.php";

class GuestBoImpl implements GuestBO
{

    public function addGuest(Guest $guest): bool
    {
      $connection = (new DBConnection())->getDBConnection();
      $guestRepo = new GuestRepoImpl();
      $guestRepo->setConnection($connection);
      return $guestRepo->addGuest($guest);
      echo "Chalo";
    }

    public function getAllGuests(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $guestRepo = new GuestRepoImpl();
        $guestRepo->setConnection($connection);
        return $guestRepo->getAllGuests();
        echo "Chalo";
    }
}