<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:57 AM
 */

require_once __DIR__."/../core/Payment.php";


interface PaymentRepo
{
    public function setConnection(mysqli $connection):void ;

    public function addPayment(Payment $payment):bool ;

    public function getAllPayments():array ;

}