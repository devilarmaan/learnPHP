<?php

interface Test{
    // access modifiers are always be public in interface
    // public function abc();

    public function xyz($cnaI, $howIcan);
}

// inherite interface
// interface Test1 extends Test
// {
    
// }

interface Test2{
    public function ho($what);
}

interface Test3{
    public function go($ok);
}

class Studnet implements Test2,Test3
{
    public function ho($what){
        echo $what;
    }
    public function go($ok){
        echo $ok;
    }

}





// using interface with class
// class Something implements Test {
//     public function xyz($cnaI, $howIcan){
//         return $cnaI + $howIcan;
//     }
// }

// $obj = new Something();
// echo $obj->xyz(10, 22);


$chek1 = new Studnet();
echo $chek1->ho(33);
echo "\n";
echo $chek1->go(44);
?>