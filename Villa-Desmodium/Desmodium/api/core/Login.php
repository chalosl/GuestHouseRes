<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 10:38 PM
 */

class Login
{
    private $userName;
    private $password;
    private $confirmPass;


    /**
     * Login constructor.
     * @param $userName
     * @param $password
     * @param $confirmPass
     * @param $userType
     */
    public function __construct($userName, $password, $confirmPass)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->confirmPass = $confirmPass;

    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getConfirmPass()
    {
        return $this->confirmPass;
    }

    /**
     * @param mixed $confirmPass
     */
    public function setConfirmPass($confirmPass): void
    {
        $this->confirmPass = $confirmPass;
    }




}