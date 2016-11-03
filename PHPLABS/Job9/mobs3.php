<?php
class mobs3 {
    public $a, $b, $res;
    public function __construct ($a,$b){
        $this -> a = $a;
        $this -> b = $b;
    }
    function sum () {
        $this -> res = $this -> a + $this -> b;
    }
};
?>