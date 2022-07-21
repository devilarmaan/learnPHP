
<?php

class Student{

    public $name = 50;
    const Roll = 45;

    public function __construct($name){
        $this->name = $name;
    }

    public function test (){

        // for accessing any value outside of object

        // $this->name;
        // echo Student::Roll;
        // echo self::Roll;

        echo  'My name is : ' . $this->name;
    }

}

// create student class instant
class Mark extends Student 
{
    public $roll;

    public function test() {
        echo  'My name is : ' . $this->name . 'My roll are : ' . $this->roll;
    }
}




$std = new Student('Arif'); 
$std->test();

echo '<br>';
//  echo $std->name;
// echo $std;
// echo Student::Roll;

$mark = new Mark('Yeaseen');

$mark->roll = 101;
$mark->test();

