<?php

class Guest{
    var $name;
    var $money;
    function __construct($name = "", $subjects = "")
    {
        $this->name = $name;
        $this->subjects = $subjects;
    }
    function getAll(){
        echo "Tôi tên là $this->name -  sẽ qua môn   $this->subjects   ";
    }
}
class Guest1 extends Guest{
    function gayssoms(){
        echo "PHP2 ez win";
    }
    
}
class Guest2 extends Guest{
}
$Vinh = new Guest1('Vinh pokémon sleep', "PHP2");
$Sekio = new Guest2('Sekio', "PHP2");
$Vinh->gayssoms();
echo "<br>";
$Sekio->getAll();


?>