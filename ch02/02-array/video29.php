<?php
    $array = array("name" => "PHP", "time" => 120, "zend", "html");
    foreach ($array as $key => $value) {
        echo $key. ":" .$value."<br>";
    }
    function myFunction ($value, $key, $param) {
        echo $key . $param . $value."<br>";
    }
    array_walk($array, "myFunction", "-");
    $number = array(2, 4, 5, 8, 11);
    function myNumber (&$value, $key, $param = 2) {
        $value = $value * $param;
    }
    array_walk($number, "myNumber", 2);
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    $number1 = array(2, 4, 5, 8, 11);
    $number2 = array(1, 4, 8, 11, 3);
    function checkNumber($number) {
        $result = ($number % 2 == 0)? "số chẵn" : "số lẻ";
        return $result;
    }
    $newArr = array_map("checkNumber", $number1);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    function myFunction1 ($n1, $n2) {
        $result = $n1 * $n2;
        return $result;
    }
    $newArr = array_map("myFunction1", $number1, $number2);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";