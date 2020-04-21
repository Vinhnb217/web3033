<?php
class Animal{
    private $name = "VinhNB";
    private $age = 20;

    public function setName($setName){
        $this->name = $setName;
    }
    static function getName(){
        $modal = new static();
        return $modal;
    }
    public function setAge($setAge){
        $this->name = $setAge;
    }
    static function getAge(){
        $modal = new static();
        return $modal;
    }
}

$sekio = new Animal;
$sekio->setName("Nguyễn Bá Vinh");
echo"<br>";
$sekio->setAge(20);
var_dump($sekio);


?>