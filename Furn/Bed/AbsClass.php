<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 12:36
 */

namespace Vendor\Dir\Bed;


abstract class AbsClass extends Params
{
    /**
     * @params integer $place
     * @params integer $floors
     * @return integer $people
     */
    abstract public function people();
}