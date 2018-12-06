<?php
$array1 = array("a", "b", "c");
$array2 = array(2, 4, 6);
$array3 = array("php" => "PHP", "jv" => "Java", "html" => "HTML", "css" => "CSS");
$newArr = array_merge($array1, $array2, $array3);
echo "<pre>";
print_r($newArr);
echo "</pre>";
$keyarray = array_rand($array3,2);
echo "<pre>";
print_r($keyarray);
echo "</pre>";
echo  array_search("PHP", $array3);
echo "<br>";
if(array_key_exists("html", $array3)) {
    echo "Exists";
}
echo "<br>";
if (in_array("PHP", $array3)) {
    echo "có tồn tại";
}
$newArr1 = array_change_key_case($array3, CASE_UPPER );
echo "<pre>";
print_r($newArr1);
echo "</pre>";
echo  $str = implode("--", $array3);
$fullName = "Phung Thi Hao";
$newArr2 = explode(" ", $fullName);
echo "<pre>";
print_r($newArr2);
echo "</pre>";