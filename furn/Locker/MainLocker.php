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
    public function __construct($n, $p, $wi, $h)
    {
        $this->name = $n;
        $this->price = $p;
        self::$width = $wi;
        self::$height = $h;
    }

    public function allInfo()
    {
        echo $this->name, "\n"
            .$this->price, "\n"
            .self::$width, "\n"
            .self::$height, "\n";
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $price;
    }

    public function getPrice(MainLocker $object)
    {
        $obj = $this->name.' '.$this->price;
        return $obj;
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