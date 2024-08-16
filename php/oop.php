<?php
class Animal {
    protected $name;

    function __construct($name) {
        $this->name = $name;
    }

    function speak() {
        echo $this->name . " makes a generic sound.<br>";
    }
}

class Dog extends Animal {
    function speak() {
        echo $this->name . " says Woof!<br>";
    }
}

class Cat extends Animal {
    function speak() {
        echo $this->name . " says Meow!<br>";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

$dog->speak();
$cat->speak();
?>
