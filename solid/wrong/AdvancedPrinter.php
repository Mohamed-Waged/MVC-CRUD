<?php 

class AdvancedPrinter implements printMachineInterface{
    public function print(){
        echo "Printing...";
    }
    
    public function scan(){
        echo "Scanning...";
    }
    
    public function xerox(){
        echo "Xerox...";
    }

}