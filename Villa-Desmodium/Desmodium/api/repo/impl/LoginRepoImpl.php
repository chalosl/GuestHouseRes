<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 10:41 PM
 */

require_once __DIR__."/../LoginRepo.php";
require_once __DIR__."/../../core/Login.php";

class LoginRepoImpl implements LoginRepo
{
    private $connection;

    /**
     * LoginRepoImpl constructor.
     */
    public function __construct()
    {
    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addUser(Login $login): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO  login(UserName,UserPassword,ConfirmPassword) VALUES(
                '{$login->getUserName()}',
                '{$login->getPassword()}',
                '{$login->getConfirmPass()}')");
        return $resp;

    }

    public function searchUser(String $userName)
    {
        $resultset =$this->connection->query("SELECT * FROM Login WHERE  UserName={$userName}");
        return $resultset->fetch_all();

    }

    public function getAllUsers(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM login ");
        return $resultset->fetch_all();
    }
}