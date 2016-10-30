<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:58
 */

namespace Dir\Furn\Bed;

interface BedInterface
{
    /**
     * @param MainBed $object
     * @return string $price
     */
    public function showPrice(MainBed $object);

    /**
     * @return string $result
     */
    public function allInfo();

}