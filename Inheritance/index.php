<?php
require_once __DIR__ .'/savingAccount.php';
$acc=new SavingAccount(0.05);
$acc->deposite(1000);
$acc->applyAnnuallInterest();
echo $acc->getBalance()."\n";

?>