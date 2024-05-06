<?php 

require_once './SimpleMachineInterface.php';
require_once './AdnacedMachineInterface.php';

class AdvancedPrinter implements SimpleMachineInterface , AdnacedMachineInterface{

    public function print(){
        echo "Printing From Advanced Printer...<br>";
    }

    public function scan(){
        echo "Scanning From Advanced Printer...<br>";
    }

    public function xerox(){
        echo "Xerox From Advanced Printer...<br>";
    }

}