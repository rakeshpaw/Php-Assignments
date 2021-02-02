<?php
    class A {
        public function printItem($string) {
                // echo 'hi :'.$string. "\n"
            echo 'Hi : ' . $string . "\n";
        }
           
        
       public function printPHP() {
            echo " I am from herapheri \n" . PHP_EOL;
        }
     }
    class B extends A {
        public function printItem($string) {
        echo 'Hi: ' . $string . PHP_EOL;
        }
     public function printPHP() {
            echo " I am from phir-heraferi ";
        }
     }
     $a = new A();
     $b = new B();
     $a->printItem('Raju');
     $a->printPHP();       
     $b->printItem('sham');
     $b->printPHP();       
    
?>

