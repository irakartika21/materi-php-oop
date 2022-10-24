<?php
class Frog extends Animal{
    public $jump;
    function __construct($name,$legs,$cold_blooded,$jump){
        $this->name =$name;
        $this->legs =$legs;
        $this->cold_blooded =$cold_blooded;
        $this->jump =$jump;
    }
    public function intro(){
        echo "<br>Name:". $this->name,
        "<br>legs:". $this->legs,
        "<br>cold_blooded:". $this->cold_blooded,
        "<br>jump:". $this->jump,
        "<br>";
    }
}
$kodok = new Frog("budug",4,"no","Hoop-Hoop");
$kodok->intro();

?>