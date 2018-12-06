<?php
    $n = 20;
    $str = "PHP";
    var_dump($n);
    var_dump($str);
    echo "<br>";
    echo gettype($str);
    echo "<br>";
    //kiểm tra $n có phải kiểu số hay không
    if(is_numeric($n)) {
        echo "Number";
    } else {
        echo "Not number";
            }
    echo "<br>";
    //mảng(Array)
    $number = array();
    $number[] = "20";
    $number[] = "-10";
    $number[] = "10";
    //Cách 1 sử dụng length
    $length = count($number);
    if($length > 0) {
        echo "số phần tử của mảng:".$length;
    } else {
        echo "Mảng rỗng";
    }
    echo "<br>";
    //cách 2 empty
    if(!empty($number)) {
        echo "số phần tử của mảng:".$length;
    } else {
        echo "Mảng rỗng";
    }
    echo "<br>";
    //in ra các phần tử của mảng
    print_r($number);
    //hoặc
    echo "<br>";
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    ?>
