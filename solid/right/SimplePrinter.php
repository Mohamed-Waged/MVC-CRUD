<?php 

require_once './SimpleMachineInterface.php';

class SimplePrinter implements SimpleMachineInterface{

    public function print(){
        echo "Printing From Simple Printer...<br>";
    }

}