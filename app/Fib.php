<?php

namespace App;

class Fib {
    private $num;

    public function __construct($num) {
        $this->num = $num;
    }

    public function cal() {
        $arr = array(1,1);
    
        for($i = 2;$i < $this->num;$i++) {
            $arr[$i] = $arr[$i -2] + $arr[$i -1];
        }
        return $arr[$this->num-1];
    }
}
