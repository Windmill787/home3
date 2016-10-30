<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:57
 */

namespace Vendor\Dir\Bed;

class MainBed extends AbsClass implements BedInterface
{
    /**
     * @param string $n
     * @param integer $pl
     * @param integer $pr
     * @param string $c
     * @param integer $d
     */
    public function __construct($n, $pl, $pr, $c, $d)
    {
        $this->name = $n;
        $this->places = $pl;
        $this->price = $pr;
        $this->color = $c;
        $this->floors = $d;
    }

    /**
     * {@inheritdoc}
     */
    public function allInfo()
    {
        $result = $this->name."\n".
            $this->places."\n".
            $this->price."\n".
            $this->color."\n".
            $this->floors;
        return $result;
    }


    /**
     * {@inheritdoc}
     */
    public function showPrice(MainBed $object)
    {
        $price = $this->name."\n".$this->price;
        return $price;
    }

    /**
     * {@inheritdoc}
     */
    public function people()
    {
        $people = $this->places * $this->floors;
        return $people;
    }
}