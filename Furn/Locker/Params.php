<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:58
 */

namespace dir\Furn\Locker;

use dir\Furn\Traits\Parameters;

class Params
{
    use Parameters;

    public static $width = 0;
    public static $height = 0;
    private $countPol = 0; //MainLocker will not inherit this property
}