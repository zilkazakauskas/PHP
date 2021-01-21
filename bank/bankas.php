<?php

class Bank extends Vartotojai {

    private $balanse;
    public static $limitAdd = 500;
    public static $limitRequest = 800;

    function __construct($balanse) {
        $this->balanse = $balanse;
    }
    
    public static function getId() {
        return self::$ak ;
    }

    public function getBalance() {
        return $this->balanse;
    }

    public function moneyRequest($amount) {
        if ($amount > 0) {
            if ($amount > self::$limitRequest) {
                echo 'per didele suma, max - 800';
            } else {
                $this->balanse -= $amount;
                echo 'pinigai isimti';
            }
        } else {
            echo 'isgryninama suma turi buti didesne uz 0!';
        }
    }

    public function moneyAdd($amount) {
        if ($amount > 0) {
            if ($amount > self::$limitAdd) {
                echo 'per didele suma, max - 500';
            } else {
                $this->balanse += $amount;
                echo 'pinigai prideti';
            }
        } else {
            echo 'pridedama suma turi buti didesne uz 0!';
        }
    }

}

class Vartotojai{

    private $name;
    private $surname;
    public static $ak = 1221343;

    function __construct($name, $surname, $ak) {
        $this->name = $name;
        $this->surname = $surname;
        self::$ak = $ak;
    }

    public function printName() {
        return ucfirst($this->name) . ' ' . ucfirst($this->surname);
    }
    

}
echo Bank::getId();
echo '<br>';

$bank = new Bank(5000);
$user = new Vartotojai('zilvinas', 'kazakauskas', 35602452745);

echo $user->printName();
echo '<br>';

echo Vartotojai::$ak;


//echo 'Balansas: ' . $bank->getBalance();
//echo '<br>';
//echo $bank->moneyRequest(700);
//echo '<br>';
//echo 'Balansas: ' . $bank->getBalance();
//echo '<br>';
//echo $bank->moneyAdd(200);
//echo '<br>';
//echo 'Balansas: ' . $bank->getBalance();
?>