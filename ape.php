<?php
class Ape extends Animal {
    public $yell;
       function __construct($name,$legs,$cold_blooded,$yell){
        $this->name =$name;
        $this->legs =$legs;
        $this->cold_blooded =$cold_blooded;
        $this->yell =$yell;
    }
    public function intro()
    {
        echo "<br>Name :". $this->name,
        "<br>legs:". $this->legs,
        "<br>cold_blooded:". $this->cold_blooded,
        "<br>yell:". $this->yell;
    }

}
$sungokong = new Ape("kera sakti", 2,"no","Auooooo-uoooo");
$sungokong->intro();

?>