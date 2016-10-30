<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:58
 */

namespace Dir\Furn\Bed;

use Dir\Furn\Traits\Parameters;

class Params
{
    use Parameters;

    /**
     * @var integer
     * @var string
     * @var integer
     * @var integer
     */
    public $places = 0;
    public $color = 'color of bed';
    protected $floors = 0; //MainBed will inherit this
    private $numofparams = 5; //but this not
}