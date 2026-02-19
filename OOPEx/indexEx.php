<?php
require_once __DIR__ . '/bankAccEx.php';
$acc1=new BankAccount();
$acc1->setName("Jhon");
$acc1->setBalance(1000);
echo $acc1->getName()." have ".$acc1->getBalance()."\n";

$acc1->deposite(30000);

$acc1->interest();
$acc1->withdraw(11000);

?>