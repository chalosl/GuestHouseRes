<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 7:10 PM
 */

require_once __DIR__."/../core/Guest.php";

interface GuestRepo
{
    public function setConnection(mysqli $connection):void ;
    public function addGuest(Guest $guest):bool;

    public function getAllGuests():array ;

}