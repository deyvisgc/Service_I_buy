<?php


namespace App\lib;


use Tecactus\Reniec\DNI;

class Buscardni
{
    protected  $dni;

    function __construct()
    {
        $this->dni=new DNI('ygvNiDt0mqi2CDxmC6V90Ne0HuqwiVLph8yuUZdS');
    }
    public function dniall($nume){
        return $this->dni->get($nume,true);


    }


}
