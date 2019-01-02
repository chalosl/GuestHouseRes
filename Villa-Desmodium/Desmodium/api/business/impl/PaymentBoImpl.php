<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:56 AM
 */

require_once __DIR__."/../PaymentBO.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Payment.php";
require_once __DIR__."/../../repo/impl/PaymentRepoImpl.php";

class PaymentBoImpl implements PaymentBO
{

    public function addPayment(Payment $payment): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $paymentRepo = new PaymentRepoImpl();
        $paymentRepo->setConnection($connection);
        return $paymentRepo->addPayment($payment);
//       echo "chalo";
    }

    public function getAllPayements(): array
    {
        // TODO: Implement getAllPayements() method.
    }
}