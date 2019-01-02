<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:38 AM
 */

class Booking
{
    private $checkIn;
    private $checkOut;
    private $adults;
    private $childrens;
    private $packageName;
    private $guestId;
    private $paymentAmmount;

    /**
     * Booking constructor.
     * @param $checkIn
     * @param $checkOut
     * @param $adults
     * @param $childrens
     * @param $packageName
     * @param $guestId
     * @param $paymentAmmount
     */
    public function __construct($checkIn, $checkOut, $adults, $childrens, $packageName, $guestId, $paymentAmmount)
    {
        $this->checkIn = $checkIn;
        $this->checkOut = $checkOut;
        $this->adults = $adults;
        $this->childrens = $childrens;
        $this->packageName = $packageName;
        $this->guestId = $guestId;
        $this->paymentAmmount = $paymentAmmount;
    }

    /**
     * @return mixed
     */
    public function getCheckIn()
    {
        return $this->checkIn;
    }

    /**
     * @param mixed $checkIn
     */
    public function setCheckIn($checkIn): void
    {
        $this->checkIn = $checkIn;
    }

    /**
     * @return mixed
     */
    public function getCheckOut()
    {
        return $this->checkOut;
    }

    /**
     * @param mixed $checkOut
     */
    public function setCheckOut($checkOut): void
    {
        $this->checkOut = $checkOut;
    }

    /**
     * @return mixed
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * @param mixed $adults
     */
    public function setAdults($adults): void
    {
        $this->adults = $adults;
    }

    /**
     * @return mixed
     */
    public function getChildrens()
    {
        return $this->childrens;
    }

    /**
     * @param mixed $childrens
     */
    public function setChildrens($childrens): void
    {
        $this->childrens = $childrens;
    }

    /**
     * @return mixed
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * @param mixed $packageName
     */
    public function setPackageName($packageName): void
    {
        $this->packageName = $packageName;
    }

    /**
     * @return mixed
     */
    public function getGuestId()
    {
        return $this->guestId;
    }

    /**
     * @param mixed $guestId
     */
    public function setGuestId($guestId): void
    {
        $this->guestId = $guestId;
    }

    /**
     * @return mixed
     */
    public function getPaymentAmmount()
    {
        return $this->paymentAmmount;
    }

    /**
     * @param mixed $paymentAmmount
     */
    public function setPaymentAmmount($paymentAmmount): void
    {
        $this->paymentAmmount = $paymentAmmount;
    }

}