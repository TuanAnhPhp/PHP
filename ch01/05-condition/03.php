<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/22/2018
 * Time: 2:57 PM
 */
$number = 10;
if ($number >=0 && $number % 2 ==0){
    $result = "nguyen duong chan";
}else if($number >=0 && $number % 2==1){
    $result = "nguyen duong le";
}else if($number < 0 && $number % 2==0){
    $result = "nguyen am chan";
}else {
    $result = "nguyen am le";
}
echo $result;