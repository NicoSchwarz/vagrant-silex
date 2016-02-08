<?php

class Calculator{

   public function plus($a){
        return $a + $a . "<br/>";
    }

    public function mal($a){
        return $a * $a . "<br/>";
    }

    public function fak($a){
        if ($a == 0) {
            return 1;
        }
        else {
            return ($a * fak($a - 1)) . "<br/>";
        }
    }
}
?>