<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:57
 */

namespace dir\furn\Locker;

class MainLocker extends Params implements LockerInterface
{
    public function __construct($n, $wi, $h, $p)
    {
        $this->name = $n;
        $this->width = $wi;
        $this->height = $h;
        $this->price = $p;

    }

    public function allInfo()
    {
        echo $this->name, "\n"
            .$this->width, "\n"
            .$this->height, "\n"
            .$this->price, "\n";
    }

    public function infoPrice()
    {
        $ans = $this->name.' '.$this->price.' ';
        return $ans;
    }

    public function area()
    {
        $area = $this->width * $this->height;
        echo $area;
    }

}