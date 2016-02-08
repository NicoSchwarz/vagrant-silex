<?php
require_once "Calculator.class.php";
$Calc = new Calculator();

for($a=0; $a<10; $a++) {
    echo $a . "+" . $a . "=" . $Calc->getPlus($a);
    echo $a . "*" . $a . "=" . $Calc->getMal($a);
    echo $a . "! =" . $Calc->getFak($a);
    echo "<hr/>";
}
?>