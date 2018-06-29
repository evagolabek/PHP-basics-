<?php

//in a class you can have properties which are
//attributes in a form of a variable and we have methods
//which are functions inside the class, when adding the properties
//you can add access modifier: public(access anywhere, outside of the class)
// private(access only in this class) or protected(access in this class and any other class that extend this one))

//when interacting with properties is make them private and create public function to access/change them

//this is the key-word when you want to access something within the class/functions etc

class Person{
  private $name;
  private $email;

  //constructor-method that runs when the object is created, you can pass things to it
  public function __construct($name, $email){
    $this->name = $name;
    $this->email = $email;
    echo 'Person created<br>';
  }

  public function setName($name){
    $this->name =$name;
  }

  public function getName(){
    return $this->name.'<br>';
  }

  public function setEmail($email){
    $this->email =$email;
  }

  public function getEmail($email){
    return $this->email.'<br>';
  }
}

$person1 = new Person('John Doe', 'jdoe@email.com');  //instantiate of person object

//$person1->setName('John Doe');

echo $person1->getName();

//$person1->name = 'John Doe';

//echo $person1->name;