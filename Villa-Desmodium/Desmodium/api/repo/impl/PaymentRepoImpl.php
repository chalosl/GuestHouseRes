<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:59 AM
 */

require_once __DIR__."/../PaymentRepo.php";
require_once __DIR__."/../../core/Payment.php";

class PaymentRepoImpl implements PaymentRepo
{
    private $connection;

    /**
     * PaymentRepoImpl constructor.
     */
    public function __construct()
    {
    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addPayment(Payment $payment): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO payment(paymentAmmount) VALUES(
                {$payment->getPaymentAmmount()})");
        return $resp;
        echo "chalo";
    }

    public function getAllPayments(): array
    {
        // TODO: Implement getAllPayments() method.
    }
}