<?php
class Animal{
    protected  $name = "VinhNB";
    public function setName($newname){
        // return $this->name;
        $this->name = $newname;
        

    }
    public function getName(){
        return $this->name;
    }
}

$sekio = new Animal();
$sekio->setName("Nguyễn Văn A");
echo"<br>";
$sekio->getName();
var_dump($sekio);
?>