<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:58
 */

namespace dir\furn\Bed;

class Params
{
    public $name = 'name of bed';
    public $places = 0;
    public $price = 0;
    public $color = 'color of bed';
    protected $floors = 0; //MainBed will inherit this
    private $numofparams = 5; //but this not
}