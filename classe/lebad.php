<?php
/**
 * Created by PhpStorm.
 * User: Kelly
 * Date: 28/01/2019
 * Time: 21:18
 */
class lebad
{
    private $bading;
    public function __construct($bading)
    {
        $this->bading=$bading;
    }
    public function bold($bading){

        return"<strong>".$this->bading=$bading."</strong>";


    }
    public  function setbading ($bading){

        $this->bading=$bading;
    }
    public function getbading($bading){

        return$this->bading=$bading;
    }
}