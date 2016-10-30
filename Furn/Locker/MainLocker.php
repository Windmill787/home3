<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:57
 */

namespace Vendor\Dir\Locker;

class MainLocker extends AbsClass implements LockerInterface
{
    /**
     * @param string $n
     * @param integer $p
     * @param integer $wi
     * @param integer $h
     */
    public function __construct($n, $p, $wi, $h)
    {
        $this->name = $n;
        $this->price = $p;
        self::$width = $wi;
        self::$height = $h;
    }

    /**
     * {@inheritdoc}
     */
    public function allInfo()
    {
        $result =
            $this->name."\n".
            $this->price."\n".
            self::$width."\n".
            self::$height;
        return $result;
    }

    /**
     * @param integer $price
     * @return integer $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $price;
    }

    /**
     * @param MainLocker $object
     * @return string $obj
     */
    public function getPrice(MainLocker $object)
    {
        $obj = $this->name."\n".$this->price;
        return $obj;
    }

    /**
     * {@inheritdoc}
     */
    public function area()
    {
        $area = static::$width * static::$height;
        return $area;
    }

    /**
     * {@inheritdoc}
     */
    public function difference()
    {
        $diff = self::$width - self::$height;
        return $diff;
    }

    /**
     * @param integer $sizeW
     * @param integer $sizeH
     * @return string $width.$height
     */
    public static function changeSize($sizeW, $sizeH)
    {
        static::$width = $sizeW;
        static::$height = $sizeH;
        return static::$width."\n".static::$height;
    }
}