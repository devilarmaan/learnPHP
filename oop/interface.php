<?php

interface Test{
    // access modifiers are always be public in interface
    // public function abc();

    public function xyz($cnaI, $howIcan);
}

// using interface with class
class Something implements Test {
    public function xyz($cnaI, $howIcan){
        return $cnaI + $howIcan;
    }
}

$obj = new Something();
echo $obj->xyz(10, 22);

?>