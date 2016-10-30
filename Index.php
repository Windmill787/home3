<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:55
 */

require 'vendor/autoload.php';

$obj = new \dir\Furn\Locker\MainLocker('name');
echo $obj->name;