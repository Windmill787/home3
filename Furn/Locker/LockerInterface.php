<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 2:01
 */

namespace Dir\Furn\Locker;

interface LockerInterface
{
    /**
     * @params integer $width
     * @params integer $height
     * @return integer $area
     */
    public function area();

    /**
     * @return string $result
     */
    public function allInfo();

}