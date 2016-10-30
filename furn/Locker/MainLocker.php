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
        $result =
            $this->name."\n".
            $this->price."\n".
            self::$width."\n".
            self::$height;
        return $result;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $price;
    }

    public function getPrice(MainLocker $object)
    {
        $obj = $this->name."\n".$this->price;
        return $obj;
    }

    public function area()
    {
        $area = static::$width * static::$height;
        return $area;
    }

    public function difference()
    {
        $diff = self::$width - self::$height;
        return $diff;
    }

    public static function changeSize($sizeW, $sizeH)
    {
        static::$width = $sizeW;
        static::$height = $sizeH;
        return static::$width."\n".static::$height;
    }
}