<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 13:17.
 */

namespace Vendor\Dir\Locker;

abstract class AbsClass extends Params
{
    /**
     * @params integer $width
     * @params integer $height
     *
     * @return int $diff
     */
    abstract public function difference();
}
