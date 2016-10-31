<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:58.
 */

namespace Vendor\Dir\Locker;

use Vendor\Dir\Traits\Parameters;

class Params
{
    use Parameters;

    /**
     * @var int
     * @var int
     * @var int
     */
    public static $width = 0;
    public static $height = 0;
    private $countPol = 0; //MainLocker will not inherit this property
}
