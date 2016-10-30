<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:57
 */

namespace dir\furn\Locker;

class MainLocker extends AbsClass implements LockerInterface
{
    public function __construct($n, $wi, $h, $p)
    {
        $this->name = $n;
        self::$width = $wi;
        self::$height = $h;
        $this->price = $p;

    }

    public function allInfo()
    {
        echo $this->name, "\n"
            .self::$width, "\n"
            .self::$height, "\n"
            .$this->price, "\n";
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $price;
    }

    public function area()
    {
        $area = static::$width * static::$height;
        echo $area;
    }

    public function difference()
    {
        $diff = self::$width - self::$height;
        echo $diff;
    }

    public static function changeSize($sizeW, $sizeH)
    {
        static::$width = $sizeW;
        static::$height = $sizeH;
        echo static::$width.' '.static::$height;
    }

}