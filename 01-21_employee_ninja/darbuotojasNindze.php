<?php

class Employee {

    protected $name = 'Ralf';
    protected $age = 35;

    function getAge() {
        return $this->age;
    }

}

class Ninja extends Employee {

    function whatIsTheName() {
        return $this->name;
    }
    function offsetExists() {
        
    }

}

class WorkerNinja extends Ninja implements Ninjaaa {

    protected $nickName;

    function showAge() {
        return $this->age;
    }

}

interface Ninjaaa {

    function showAge();
}

$workerNinja = new WorkerNinja;

//echo $workerNinja->showAge();
//echo $workerNinja->whatIsTheName();

print_r($workerNinja);