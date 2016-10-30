<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:57
 */

namespace dir\furn\Bed;

class MainBed extends AbsClass implements BedInterface
{
    /**
     * @param name places price and color of Bed
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
        $result = $this->name.' '
            .$this->places.' '
            .$this->price.' '
            .$this->color.' '
            .$this->floors;
        echo $result;
    }


    /**
     * @echo name and price of Bed
     */
    public function showPrice()
    {
        echo $this->name.' '.$this->price;
    }

    public function people()
    {
        // TODO: Implement people() method.
    }
}