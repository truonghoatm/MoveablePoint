<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 25/01/2019
 * Time: 17:04
 */
include_once "Point.php";
include_once "MoveablePoint.php";
$point = new Point();
$point->setX(3);
$point->setY(4);
echo $point."<br/>";

$moveablepoint = new MoveablePoint();
$moveablepoint->setX(2);
$moveablepoint->setY(3);
$moveablepoint->setXSpeed(3);
$moveablepoint->setYSpeed(4);
echo $moveablepoint."<br/>";
$moveablepoint->move();
echo $moveablepoint;



