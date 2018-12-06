<?php
    $course = array("PHP", "Zend", "HTML", "CSS", "JAVA");
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    echo "Current:".current($course)."<br>"; //PHP
    echo "Next:".next($course)."<br>"; //Zend
    echo "Current:".current($course)."<br>"; //Zend
    echo "Next:".next($course)."<br>"; //HTML
    echo "Prev:".prev($course)."<br>"; //Zend
    echo "Reset:".Reset($course)."<br>"; //PHP
    echo "End:".End($course)."<br>"; //JAVA
    $number = array("name" => "PHP", "time" => 80, 100, 40);
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    $result = serialize($number);
    echo $result;
    echo "<br>";
    $array = unserialize($result);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    shuffle($number);
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    $name = "PHP";
    $time = 100;
    $array = compact("name", "time");
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    $array = range(0, 10,2);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    $key = array("name", "time", "total");
    $value = array("PHP", 100, 2000);
    $newArr = array_combine($key, $value);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";