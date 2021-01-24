<?php

abstract class Forma{
    abstract protected function plotas();
    abstract protected function perimetras();
    
    public static function formosApibrezimas(){
        return "Sis objektas apibrezia forma";
    }
    
    protected $dimensijos = ['x' => 0, 'y'=> 0];
    
    public static function dimensijuKiekis(){
        return count(self::$dimensijos);
    }
    
    public function nustatytiDimensijas(){
        $this->dimensijos['x'] = $x;
        $this->dimensijos['y'] = $y;
    }
}

class Apskritimas extends Forma{
    
    protected $spindulys;
    
    function __construct($spindulys) {
        $this->spindulys = $spindulys;
    }
    
    function perimetras() {
        return 2*M_PI*$this->spindulys;
    }
    
    function plotas() {
        return M_PI*pow($this->spindulys, 2);
    }

}

class Staciakampis extends Forma{
    protected $x = 2;
    protected $y = 5;
    
    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    function perimetras() {
        return ($this->x + $this->y) * 2;           
    }
    
    function plotas() {
        return $this->x * $this->y;
    }
}

class Kvadratas extends Forma{
    protected $x = 2;
    
    function __construct($x) {
        $this->x = $x;
    }
    
    function perimetras() {
        return $this->x * 4; 
    }
    
    function plotas() {
        return $this->x * $this->x;
    }
}