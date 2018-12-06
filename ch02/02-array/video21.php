<?php
    //mảng số nguyên là mảng mà các chỉ số của các phần tử phải thuộc  kiểu số nguyên
    //cách 1
    $number = array();
    $number[] = "20";
    $number[] = "8";
    $number[] = "3";
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    echo "<br>";
    //cách 2
    $number = array();
    $number[0] = "20";
    $number[1] = "8";
    $number[2] = "3";
    //cách 3
    $number = array(20, 18, 9);
    echo $number[1];
    echo "<br>";
    //cách in tất cả các phần tử trong mảng
    $number = array(20, 18, 9);
    if(!empty($number)) {
        for ($i = 0; $i < count($number); $i++) {
            echo $number[$i] . '<br>';
        }
    }
    echo "<br>";
    //hoặc
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    if(!empty($number)) {
        foreach ($number as $key => $value) {
            echo $value. "<br>";
        }
    }
    ?>