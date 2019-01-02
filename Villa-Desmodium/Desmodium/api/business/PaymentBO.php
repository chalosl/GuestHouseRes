<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/7/2018
 * Time: 3:55 AM
 */

require_once __DIR__."/../core/Payment.php";


interface PaymentBO
{
    public function addPayment(Payment $payment):bool ;

    public function getAllPayements():array ;

}