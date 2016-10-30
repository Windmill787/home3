<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:55
 */

require 'vendor/autoload.php';

$obj1 = new \dir\furn\Bed\MainBed('namebed', 2, 2000, 'red', 2);
echo $obj1->name;
$obj2 = new \dir\furn\Locker\MainLocker('namelocker', 100, 50, 2000);
$obj2->difference();