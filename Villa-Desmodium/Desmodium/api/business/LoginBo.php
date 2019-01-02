<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 10:42 PM
 */

require_once __DIR__."/../core/Login.php";

interface LoginBo
{
    public function addUser(Login $login):bool ;

    public function searchUser(String $name);

    public function getAllUsers():array ;

}