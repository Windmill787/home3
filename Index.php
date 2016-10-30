<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 30.10.16
 * Time: 1:55
 */

require 'vendor/autoload.php';

$obj = new \Dir\Furn\Locker\MainLocker('name');
echo $obj->name;