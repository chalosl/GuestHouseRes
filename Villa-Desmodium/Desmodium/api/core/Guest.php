<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/5/2018
 * Time: 7:08 PM
 */

class Guest
{
    private $name;
    private $country;
    private $email;
    private $passportNo;
    private $mobile;

    /**
     * Guest constructor.
     * @param $name
     * @param $country
     * @param $email
     * @param $passportNo
     * @param $mobile
     */
    public function __construct($name, $country, $email, $passportNo, $mobile)
    {
        $this->name = $name;
        $this->country = $country;
        $this->email = $email;
        $this->passportNo = $passportNo;
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassportNo()
    {
        return $this->passportNo;
    }

    /**
     * @param mixed $passportNo
     */
    public function setPassportNo($passportNo): void
    {
        $this->passportNo = $passportNo;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile): void
    {
        $this->mobile = $mobile;
    }




}