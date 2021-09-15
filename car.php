<?php

class car {
    private $color = 'red';
    protected $speed;
    protected function speedtest(){
        echo "speed is $this->speed";
    }
}

class bmw extends car{
    public function getcolor(){
        echo $this->color;
    }
}


$car1 = new bmw();
// $car1->getcolor();
echo $car1->color;
// $car1->speed = 200;
// $car1->speedtest();
