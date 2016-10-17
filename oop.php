<?php

class car{
    public $color; //property
    
    public function setColor($c) {
        return 'Car is : '.$this->color=$c;
    }
    public function sayHello(){
        return 'say Hello';
    }
}

$newcar=new car;
$test =$newcar->setcolor('red');
echo $test;
echo '<hr>';
echo $newcar->sayHello();
echo '<hr>';
echo $newcar->color='orange';
