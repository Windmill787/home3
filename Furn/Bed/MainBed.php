<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:57
 */

namespace Dir\Furn\Bed;

class MainBed extends AbsClass implements BedInterface
{
    /**
     * @param name places price color and count of floors(Bed)
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
     * @echo name, places, price and color of Bed
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
     * @echo name and price of Bed
     */
    public function showPrice()
    {
        $price = $this->name."\n".$this->price;
        return $price;
    }

    public function people()
    {
        $people = $this->places * $this->floors;
        return $people;
    }
}