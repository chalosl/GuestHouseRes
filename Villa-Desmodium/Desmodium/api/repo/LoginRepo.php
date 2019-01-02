<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 10:41 PM
 */

require_once __DIR__."/../core/Login.php";


interface LoginRepo
{
    public function setConnection(mysqli $connection):void ;

    public function addUser(Login $login):bool ;

    public function searchUser(String $userName);

    public function getAllUsers():array ;

}