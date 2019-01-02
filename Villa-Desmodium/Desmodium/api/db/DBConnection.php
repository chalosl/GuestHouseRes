<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/4/2018
 * Time: 11:36 AM
 */

class DBConnection
{
    private $host='127.0.0.1';
    private $username ='root';
    private $password ='1234';
    private $database ='villa';
    private $port ='3306';

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection=new mysqli($this->host,$this->username,$this->password,$this->database,$this->port);
    }

    public function getDBConnection(){
        return $this->connection;
    }


}