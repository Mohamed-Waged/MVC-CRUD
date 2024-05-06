<?php

require_once './SimplePrinter.php';

$simplePrinter = new SimplePrinter();

echo $simplePrinter->print();



require_once './AdvancedPrinter.php';

$advancedPrinter = new AdvancedPrinter();

echo $advancedPrinter->print();
echo $advancedPrinter->scan();
echo $advancedPrinter->xerox();