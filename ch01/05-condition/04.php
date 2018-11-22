<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/22/2018
 * Time: 3:08 PM
 */
$number = -11;
$n =$number % 2;

$resultFirst = ($number >= 0) ? "nguyen duong" : "nguyen am";
$resultLast  = ($n == 0) ? "chan" : "le";
$result = $resultFirst . " " . $resultLast;
echo $result;