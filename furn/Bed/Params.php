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
    protected $code = 'secret code';//MainBed will not inherit this
    private $numofparams = 5; //and this too
}