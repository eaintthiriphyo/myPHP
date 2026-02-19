<?php
class BankAccount{
    private $name;
    private $balance=0;

public function __construct($name,$balance){
    $this->name=$name;
     $this->balance=$balance;

}


    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name=$name;
    }
    public function getBalance(){
        return $this->balance;
    }
    public function setBalance($balance){
        $this->balance=$balance;
    }

    public function deposite($balance){
        $this->balance+=$balance;
        echo "deposite is ".$balance."<br>";
        echo $this->name ." owned ".$this->balance." in this account <br>";
    }

    public function interest(){
        $rate=0.05;
        $interest=$this->balance*$rate;
        $this->balance+=$interest;
        echo "Got $interest Interest<br>";
        echo "$this->name Total Account Balance is ".$this->balance."<br>";
    }

    public function withdraw($amount){
        if($amount>$this->balance){
            echo "Fail withdraw.Insufficient Amount.";
        }else{
            $this->balance-=$amount;
            echo "Withdraw ".$amount ."<br>";
            echo $this->name ." owned ".$this->balance." in this account <br>";
        }
       
    }
}

?>