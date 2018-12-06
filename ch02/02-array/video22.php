<?php
    //mảng kết hợp là mảng các chỉ số của các phần tử có thể là chuỗi hoặc sô
    // cách 1
    /*  $number = array();
    $number["asp"] = "ASP";
    $number[0] = "20";
    $number[1] = "8";
    $number[2] = "3";
    $number["php"] = "PHP";
    */
    //cách 2
    $number = array("asp" => "ASP", 0 => 20, 1 => 8, 2 => 3, "php" => "PHP");
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    echo "<br>";
    //  echo $number["php"];
    if(!empty($number)) {
        foreach ($number as $key => $value) {
            echo $key. "=>" .$value."<br>";
        }
    }
    ?>