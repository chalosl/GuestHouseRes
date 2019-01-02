<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 7:19 PM
 */

require_once __DIR__."/../core/Guest.php";


interface GuestBO
{
    public function addGuest(Guest $guest):bool;

    public function getAllGuests():array ;

}