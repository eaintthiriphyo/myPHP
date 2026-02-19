<?php
require_once __DIR__ . '/bankAccEx.php';

$name     = isset($_POST['name'])     ? trim((string)$_POST['name']) : '';
$amount   = isset($_POST['amount'])   ? (float)$_POST['amount']      : 0;
$amt   = isset($_POST['amt'])   ? (float)$_POST['amt']      : 0;
$displayBalance=$amount;
$resultMsg="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
  $acc1=new BankAccount($name,$amount);

    $action  = $_POST['action'] ?? '';
    if ($action === 'deposite') {
        $acc1->deposite($amt);
    } if ($action === 'withdraw') {
        $acc1->withdraw($amt);
    } if ($action === 'interest') {
        $acc1->interest();
    }


    if (method_exists($acc1, 'getBalance')) {
        $displayBalance = $acc1->getBalance();
        $resultMsg .= " Current balance: " . $displayBalance;
    } else {
        $resultMsg .= " Operation successful.";
    }
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
<form method="post" >
   <p> Acc Name :<?= $name ?></p>
   <p> Balance :<?= $displayBalance ?></p>

     <input type="hidden" name="name" value="<?= $name ?>">
     <input type="hidden" name="amount" value="<?= $displayBalance  ?>">

     Amount  <input type="number" name="amt"><br><br>
        <button type="submit" name="action" value="deposite">Deposite</button>
         <button type="submit" name="action" value="withdraw">Withdraw</button>
         <button type="submit" name="action" value="interest">Interest</button>
</form>





</body>
</html>