<?php

require_once '../error-reporting/index.php';

// Base class animal
abstract class Animal
{
    public $name;
    public $age;

    public function Describe()
    {
        return $this->name . ", " . $this->age . " years old";    
    }

    abstract public function Greet();

}

// Derived class dog
class Dog extends Animal
{
    public function Greet()
    {
        return "Woof!";    
    }

    public function Describe()
    {
        return parent::Describe() . ", and I'm a dog!";    
    }
}

// Derived class cat
class Cat extends Animal
{
    public function Greet()
    {
        return "Meaw!";
    }

    public function Describe()
    {
        return parent::Describe() . ", and I'm a cat!";    
    }
}

$animal = new Dog();
$animal->name = "Bob";
$animal->age = 7;
echo $animal->Describe();
echo $animal->Greet();

echo "<br>";

$animal = new Cat();
$animal->name = "Katty";
$animal->age = 3;
echo $animal->Describe();
echo $animal->Greet();