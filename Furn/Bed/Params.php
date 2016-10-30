<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:58
 */

namespace dir\Furn\Bed;

use dir\Furn\Traits\Parameters;

class Params
{
    use Parameters;

    public $places = 0;
    public $color = 'color of bed';
    protected $floors = 0; //MainBed will inherit this
    private $numofparams = 5; //but this not
}