<?php
class bankCustomrs {
    private string $customersName;
    private string $adress;
    private string $email;
    private string $card;
    protected string $acc;

    //construktor
    public function __construct(){
        $this->email ="ini _email_function.@gmail.com";
    }
    public function __destruct()
    {
        echo "konneksi sudah selesai";
    }
    public function setCustomersName ($customersName){
        $this->customersName = $customersName ;
    }
    public function setAdres ($adress){
        $this->adress = $adress ;
    }
    public function setEmail ($email){
        $this->email = $email ;
    }

    public function setcard($card){
        $this->card = $card;
    }
    public function getacc($acc){
        $this->acc = $acc;
    }

    public function insertCard(){
        echo "kartu dimasukkan : <br>";
        echo "nama customers: " .$this-> customersName. '<br>' ; 
        echo "alamat :".$this ->adress . '<br>';
        echo "email :".$this ->email. '<br>';
        echo "card :".$this ->card  . '<br>';
        echo "acc :".$this ->acc  . '<br>';
    }
    public function selectTrasaction(){
    }
    public function enterPIN( int $number){
        echo "PIN telah di enter : " . $number ;

    }
public function changePIN(){
    
}

public function withDrawCash(){
    
}
public function requestTransactionsummary(){
    
}
public function accaptAmoun(){
    
}
}