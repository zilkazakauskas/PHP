<?php

abstract class Gyvunai implements PlaukiantysGyvunai{

    protected $svoris;
    protected $regionas;

    function svoris() {
        return $this->svoris;
    }

    abstract function valgo($objektas);
    
    function plaukia(){
        echo 'Plaukia.';
    }
}

interface PlaukiantysGyvunai {

    function plaukia();
}

abstract class Mesedziai extends Gyvunai {
    
    protected $dantuAstrumas;
    
                function valgo($objektas) {
        if (get_class($objektas) == 'Kiskis') {
            echo get_class($objektas) . ' buvo suvalgytas.<br>';
            if ($objektas->svoris() / $this->svoris < 0.01) {
                echo get_class($this) . ' dar ne sotus.<br>';
            }
            $this->svoris += $objektas->svoris();
        } else if (get_class($objektas) == 'Liutas') {
            $objektas->valgo($this);
        } else {
            echo get_class($objektas) . ' yra nevalgomas.<br>';
        }
    }

}

abstract class Zoliaediai extends Gyvunai {

    function valgo($objektas) {
        if (get_class($objektas) == 'Zole') {
            echo get_class($objektas) . ' buvo suvalgytas.<br>';
            if ($objektas->svoris() / $this->svoris < 0.01) {
                echo get_class($this) . ' dar ne sotus.<br>';
            }
            $this->svoris += $objektas->svoris();
        } else if (get_class($objektas) == 'Liutas') {
            $objektas->valgo($this);
        } else {
            echo get_class($objektas) . ' yra nevalgomas.<br>';
        }
    }

}

class Zole {

    protected $svoris;
    protected $regionas;
    
                function __construct($svoris,$regionas) {
        $this->svoris = $svoris;
        $this->regionas = $regionas;
    }

    function svoris() {
        return $this->svoris;
    }

}

class Liutas extends Mesedziai {

    function __construct($svoris, $regionas, $dantuAstrumas) {
        $this->svoris = $svoris;
        $this->regionas = $regionas;
        $this->dantuAstrumas = $dantuAstrumas;
    }

}

class Kiskis extends Zoliaediai {

    function __construct($svoris, $regionas) {
        $this->svoris = $svoris;
        $this->regionas = $regionas;
    }

}

class Tunas extends Gyvunai implements PlaukiantysGyvunai {

    function __construct($svoris, $regionas) {
        $this->svoris = $svoris;
        $this->regionas = $regionas;
    }

    function valgo($objektas) {
        if (get_class($objektas) == 'Zole') {
            echo get_class($objektas) . ' buvo suvalgytas.<br>';
            if ($objektas->svoris() / $this->svoris < 0.01) {
                echo get_class($this) . ' dar ne sotus.<br>';
            }
            $this->svoris += $objektas->svoris();
        } else if (get_class($objektas) == 'Ryklys') {
            echo get_class($this) . ' buvo suvalgytas.<br>';
        } else {
            echo get_class($objektas) . ' yra nevalgomas.<br>';
        }
    }

    function plaukia() {
        echo 'Plaukia <br>';
    }

}

class Ryklys extends Gyvunai implements PlaukiantysGyvunai {
    
                function __construct($svoris, $regionas, $dantuAstrumas) {
        $this->svoris = $svoris;
        $this->regionas = $regionas;
        $this->dantuAstrumas = $dantuAstrumas;
    }

    function valgo($objektas) {
        if (get_class($objektas) == 'Tunas') {
            echo get_class($objektas) . ' buvo suvalgytas.<br>';
            if ($objektas->svoris() / $this->svoris < 0.01) {
                echo get_class($this) . ' dar ne sotus.<br>';
            }
            $this->svoris += $objektas->svoris();
        } else {
            echo get_class($objektas) . ' yra nevalgomas.<br>';
        }
    }

    function plaukia() {
        echo 'Plaukia <br>';
    }

}


//$kiskis = new Kiskis(15,'europa');
//$liutas = new Liutas(250,'afrika',8);
//$ryklys = new ryklys(800,'atlantas',10);
//$tunas = new Tunas(50,'atlantas');
//$zole = new Zole(0.1,'europa');

//$liutas->valgo($kiskis);
//$kiskis->valgo($liutas);
//$kiskis->valgo($zole);
//$tunas->valgo($zole);
//$ryklys->valgo($tunas);
//$tunas->valgo($ryklys);

//print_r($ryklys);