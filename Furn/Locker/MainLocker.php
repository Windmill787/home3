<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:57.
 */

namespace Vendor\Dir\Locker;

class MainLocker extends AbsClass implements LockerInterface
{
    /**
     * @param string $n
     * @param int    $p
     * @param int    $wi
     * @param int    $h
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
     * @param int $price
     *
     * @return int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $price;
    }

    /**
     * @param MainLocker $object
     *
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
     * @param int $sizeW
     * @param int $sizeH
     *
     * @return string $width.$height
     */
    public static function changeSize($sizeW, $sizeH)
    {
        static::$width = $sizeW;
        static::$height = $sizeH;

        return static::$width."\n".static::$height;
    }
}
