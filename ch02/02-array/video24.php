<?php
    $course = array("name" => "PHP", "time" => 200);
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    echo "<br>";
    // Array_value($array) trả về một mảng liên tục có các phần tử có giá trị là giá trị
    // lấy từ các phần tử của mảng $array
    $newArr = array_values($course);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    //Array_keys($array) trả về một mảng liên tục có các phần tử có giá trị là khóa lấy
    // từ các phần tử của mảng $array
    $newArr = array_keys($course);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    //Array_pop($array) loại bỏ phần tử cuối cùng của mảng. Hàm trả về phần tử cuối cùng được loại bỏ
    $course = array("PHP", "Joomla", "jQuery", "Java");
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    $newArr= array_pop($course);
    echo $newArr;
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    //Array_shift($array) loại bỏ phần tử đầu tiên của mảng. Hàm trả về phần tử đầu tiên được loại bỏ
    $newArr = array_shift($course);
    echo $newArr;
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    $course = array("PHP", "Joomla", "jQuery", "Java");
    function removeItem (&$array, $type = "first", $total = 2) {
        $result = array ();
        if(!empty($array)) {
            if($total >= count($array)) {
                $result = $array;
                $array = null;
            } else {
                if ($type == "first") {
                    for ($i = 1; $i <= $total; $i++) {
                        $result[] = array_shift($array);
                    }
                } else if ($type == "last") {
                    for ($i = 1; $i <= $total; $i++) {
                        $result[] = array_pop($array);
                    }
                }
            }
        }
        return $result;
    }
    echo "course: <br>";
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    $arrTemp = removeItem($course, "last",20);
    echo "arrTemp: <br>";
    echo "<pre>";
    print_r($arrTemp);
    echo "</pre>";
    echo "course: <br>";
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    ?>
