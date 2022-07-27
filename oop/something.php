<?php

require_once 'index.php';

// $test =  new Index();

// echo $test->sum(23, 44);

// // sum(4, 18);

// $hi =  new Index();


class Fruit {
    public $name;
    public $color;

    function get_name($name){
        $this->name = $name;
    }

    function set_name(){
        return $this->name;
    }
}

$ans = new Fruit();
$ans->get_name('Hello');
echo '<br>';

echo $ans->set_name();

// You can use the instanceof keyword to check if an object belongs to a specific class:

    
// $ans = new Fruit();
var_dump($ans instanceof Fruit);


?>


