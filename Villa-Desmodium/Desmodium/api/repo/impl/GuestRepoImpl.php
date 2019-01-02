<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 7:12 PM
 */

require_once __DIR__."/../GuestRepo.php";
require_once __DIR__."/../../core/Guest.php";


class GuestRepoImpl implements GuestRepo
{
    private $connection;

    /**
     * GuestRepoImpl constructor.
     */
    public function __construct()
    {
        $connection=(new DBConnection())->getDBConnection();
        $this->connection=$connection;
    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addGuest(Guest $guest): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO Guest(GuestName, GuestCountry, GuestEmail ,GuestPassPortNo, GuestContctNo ) VALUES(
                '{$guest->getName()}',
                '{$guest->getCountry()}',
                '{$guest->getEmail()}',
                '{$guest->getPassportNo()}',
                {$guest->getMobile()})");
        return $resp;


    }

    public function getAllGuests(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM  Guest");
        return $resultset->fetch_all();
    }
}