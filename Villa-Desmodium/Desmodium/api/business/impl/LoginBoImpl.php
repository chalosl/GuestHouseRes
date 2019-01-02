<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 10:42 PM
 */

require_once __DIR__."/../LoginBo.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Login.php";
require_once __DIR__."/../../repo/impl/LoginRepoImpl.php";

class LoginBoImpl implements LoginBo
{

    public function addUser(Login $login): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $loginRepo = new LoginRepoImpl();
        $loginRepo->setConnection($connection);
        return $loginRepo->addUser($login);

    }

    public function searchUser(String $name)
    {
        $connection = (new DBConnection())->getDBConnection();
        $loginRepo = new LoginRepoImpl();
        $loginRepo->setConnection($connection);
        return $loginRepo->searchUser($name);
    }

    public function getAllUsers(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $loginRepo = new LoginRepoImpl();
        $loginRepo->setConnection($connection);
        return $loginRepo->getAllUsers();
    }
}