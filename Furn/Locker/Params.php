<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:58
 */

namespace Dir\Furn\Locker;

use Dir\Furn\Traits\Parameters;

class Params
{
    use Parameters;

    /**
     * @var integer
     * @var integer
     * @var integer
     */
    public static $width = 0;
    public static $height = 0;
    private $countPol = 0; //MainLocker will not inherit this property
}