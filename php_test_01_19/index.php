<?php

class Convert {
    private $array;
    
    function __construct($array) {
        $this->array = $array;
    }
    
    function printArray() {
        echo '<pre>';
        print_r($this->array);
        echo '</pre>';
    }
    
    function secondToBinary() {
        $this->array = array_values($this->array);
        return decbin($this->array[1]);
    }
    
    function secondToOctal() {
        $this->array = array_values($this->array);
        return decoct($this->array[1]);
    }
    
    function secondToHexadecimal() {
        $this->array = array_values($this->array);
        return dechex($this->array[1]);
    }
    
    function thirdReverseToBinary() {
        $this->array = array_values($this->array);
        $reverse3 = count($this->array) - 3;
        return decbin($this->array[$reverse3]);
    }
    
    function thirdReverseToOctal() {
        $this->array = array_values($this->array);
        $reverse3 = count($this->array) - 3;
        return decoct($this->array[$reverse3]);
    }
    
    function thirdReverseToHexadecimal() {
        $this->array = array_values($this->array);
        $reverse3 = count($this->array) - 3;
        return dechex($this->array[$reverse3]);
    }

}

$arr = [1,'antras'=>10,3,2,10,3,5];


//ISKVIETIMAS

$convert = new Convert($arr);

$convert->printArray();


echo $convert->secondToBinary() .'<br>';
echo $convert->secondToOctal() .'<br>';
echo $convert->secondToHexadecimal() .'<br>';

echo '<br>';

echo $convert->thirdReverseToBinary() .'<br>';
echo $convert->thirdReverseToOctal() .'<br>';
echo $convert->thirdReverseToHexadecimal() .'<br>';

