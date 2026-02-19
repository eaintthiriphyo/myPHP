<?php

require_once __DIR__.'/account.php';
class SavingAccount extends Account{
    private float $interestRate;
    public function __construct(float $interestRate){
        $this->interestRate=$interestRate;
    }

    public function applyAnnuallInterest():void{
        $this->balance+=$this->balance*$this->interestRate;
    }
}

?>