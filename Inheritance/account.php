<?php

class Account{
    protected float $balance=0.0;
    public function deposite(float $amount):void{
        if($amount<=0){
            throw new InvalidArgumentException("Amount must be > 0");
        }
        $this->balance+=$amount;
    }

    public final function getBalance():float{
        return $this->balance;
    }
}

?>