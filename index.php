<?php

require "interface.php";
// encapsulation 
// inheritance 
// ploymorphesm
// abstraction 
// ===================


    // mohamed pc
        // class soft -> clone , inherit soft parent
        // class hard  - clone , inherit hard parent



class calc implements calcSTD{


    public $x;
    public $y;
    public $res;

    public function __construct($num1,$num2)
    {
        $this->x = $num1;
        $this->y = $num2;
   
    }

    public function add(){
        $this->res =  $this->x + $this->y;
        return $this;
    }    
    public function div(){
        $this->res = $this->x / $this->y;
        return $this;

    }      
    public function mult(){
        $this->res = $this->x * $this->y; 
        return $this;

    }  
    public function sub(){
        $this->res = $this->x - $this->y; 
        return $this;

    } 
    public function result(){
        return $this->res;
    }
}





