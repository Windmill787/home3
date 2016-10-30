<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:57
 */

namespace dir\furn\Bed;

class MainBed extends Params implements BedInterface
{
    /**
     * @param name places price and color of Bed
     */
    public function __construct($n, $pl, $pr, $c)
    {
        $this->name = $n;
        $this->places = $pl;
        $this->price = $pr;
        $this->color = $c;
    }

    /**
     * @echo name, places, price and color of Bed
     */
    public function allInfo()
    {
        $result = $this->name.' '.$this->places.' '.$this->price.' '.$this->color;
        echo $result;
    }


    /**
     * @echo name and price of Bed
     */
    public function showPrice()
    {
        echo $this->name.' '.$this->price;
    }
}