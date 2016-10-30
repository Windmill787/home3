<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:55
 */

require 'vendor/autoload.php';

$obj2 = new \dir\furn\Locker\MainLocker('namelocker', 2000, 100, 50);
$obj2->setPrice('4000');
echo $obj2->getPrice($obj2);
