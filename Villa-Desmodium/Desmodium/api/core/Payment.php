<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:49 AM
 */

class Payment
{
    private $paymentId;
    private $paymentAmmount;

    /**
     * Payment constructor.
     * @param $paymentId
     * @param $paymentAmmount
     */
    public function __construct($paymentId, $paymentAmmount)
    {
        $this->paymentId = $paymentId;
        $this->paymentAmmount = $paymentAmmount;
    }

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param mixed $paymentId
     */
    public function setPaymentId($paymentId): void
    {
        $this->paymentId = $paymentId;
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