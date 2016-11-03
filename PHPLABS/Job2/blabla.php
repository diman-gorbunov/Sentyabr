
<?php

class blabla {
    public $a, $b;
    private $c;
    function __construct($a,$b) {
        $this -> a = $a;
        $this -> b = $b;
    }
    function umn() {
        $this -> c = $this -> a * $this -> b;
    }
    function vivod() {
        return $this -> c;
    }
    function izm() {
        $this -> c = $this -> c + 1;
        return $this ->c;
    }
    function __destruct() {
        echo "<br>";
        echo "pochistili vrode";
    }
}
?>
