<?
class Pet {
    public $name;
    function __construct($pet_name) {
        $this->name = $pet_name;
    }
    function eat() {
        echo "<p>$this->name is eating.</p>";
        $this->play();
    }
    function sleep() {
        echo "<p>$this->name is sleeping.</p>";
    }
    function play() {
        echo "<p>$this->name is playing.</p>";
    }
}


class Cat extends Pet {
    function play() {
        echo "<p>$this->name is climbing.</p>";
    }
}



class Dog extends Pet {
    function play() {
        echo "<p>$this->name is fetching.</p>";
    }
}


$dog = new Dog('Satchel');
$cat = new Cat('Bucky');
$pet = new Pet('Rob');

$dog->eat();
$cat->eat();
$pet->eat();

$dog->sleep();
$cat->sleep();
$pet->sleep();

$dog->play();
$cat->play();
$pet->play();

?>