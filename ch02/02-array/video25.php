<?php
    //array_unique($array) loại bỏ những phần tử trùng nhau trong mảng và trả về mảng mới
    $course = array("PHP", "Joomla", "Zend Framework", "jQuery", "PHP", "jQuery");
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    $newArr = array_unique($course);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    //sử dụng hàm unset để xóa bỏ phần tử ở vị trí bất kỳ trong mảng
    echo "<br>";
    $number = 10;
    echo $number;
    unset ($number);
    //xóa phần tử đầu tiên của mảng
    unset($course[0]);
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    //array_push($array, $val1, $val2,...,$valn) thêm 1 hay nhiều phần tử vào cuối mảng $array.
    // Hàm trả về kiểu số nguyên là số lượng phần tử của mảng $array mới
    $course = array("PHP", "Joomla", "Zend Framework", "jQuery", "PHP", "jQuery");
    echo array_push($course, "HTML", "CSS");
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    //array_unshift($array, $val1, $val2,...,$valn) thêm 1 hay nhiều phần tử vào đầu mảng $array.
    // Hàm trả về kiểu số nguyên là số lượng phần tử của mảng $array mới
    $course = array("PHP", "Joomla", "Zend Framework", "jQuery", "PHP", "jQuery");
    echo  array_unshift($course, "Python", "C#");
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    // array_reverse($array) đảo ngược vị trí các phần tử của mảng, phần tử cuối thành
    // phần tử đầu tiên và trả về một mảng mới .
    $course = array("php" => "PHP", "Joomla", "Zend Framework", "jquery" => "jQuery", "PHP", "jQuery");
    $newArr = array_reverse($course);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    //sử dụng hàm array_flip($array) trả về một mảng có khóa và giá trị được hoán đổi cho
    // nhau so với mảng $array
    $course = array( "web" => "PHP", "Joomla", "Zend Framework", "jq" => "jQuery");
    $newArr = array_flip($course);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    $number = array(1, 5, 8, 20, 5, 3);
    //tính tổng array_sum($array)
    $sum = array_sum($number);
    echo "tổng của mảng:".$sum;
    echo "<br>";
    $lenght = count($number);
    //tính giá trị tb của mảng
    echo "giá trị trung bình của mảng:".$sum/$lenght;
    echo "<br>";
    //xác định phần tử nhỏ nhất trong mảng min($array)
    echo "Số nhỏ nhất trong mảng:". min($number);
    echo "<br>";
    //xác định phần tử lớn nhất trong mảng max($array)
    echo "Số lớn nhất trong mảng".max($number);
    echo "<br>";
    //thống kê sự xuất hiện của các phần tử trong mảng chúng ta sử dụng array_count_values(array)
    $course = array("PHP", "Joomla", "Zend Framework", "jQuery", "PHP", "jQuery");
    $newArr = array_count_values($course);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
