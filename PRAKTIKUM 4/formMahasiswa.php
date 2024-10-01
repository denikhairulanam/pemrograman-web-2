<?php

class Form{
    protected $fields;

    public function __construct()
    {
        $this->fields = [];
    }

    public function setTextField($nama, $text){
        $label = "<div class='wrapper'><label for='" .$nama."'>".$nama."</label>";
        $textfield = "<input class='form-input' type='text' name='" .$nama. "'></div>";
        array_push($this->fields, $label . $textfield);
    }

    public function tampilkanForm(){
        echo "<form>";
            foreach($this->fields as $field){
                echo $field;
            }
        echo "<input type='submit' value='simpan'>";
        echo "</form>";
    }
}

class FormMahasiswa{

}