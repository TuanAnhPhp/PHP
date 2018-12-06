<?php
    //mảng đa chiều là  mảng mà mỗi phần tử trong mảng chính có thể là một mảng và mỗi
    // phần tử trong mảng con lại cũng có thể là một mảng
    //Cách 1
    /*$student = array();
    $student["SV001"] = array("name" => "John", "sex" => 1, "score" => array(6,8,5));
    $student["SV002"] = array("name" => "Peter", "sex" => 1, "score" => array(9,8,5));
    $student["SV003"] = array("name" => "Marry", "sex" => 0, "score" => array(9,8,9));
    */
    //cách 2
    $student = array(
        "SV001" => array("name" => "John", "sex" => 1, "score" => array(5,9,8)),
        "SV002" => array("name" => "Peter", "sex" => 1, "score" => array(5,10,8)),
        "SV003" => array("name" => "Marry", "sex" => 0, "score" => array(5,10,8))
    );
    //cho biết tên sinh viên có mã SV002
    echo $student["SV002"]["name"]."<br>";
    echo "<br>";
    //Điểm môn thứ 2 của SV003
    echo $student["SV003"]["score"][1];
    //thay đổi tên sinh viên SV003 thành Anne
    $student["SV003"]["name"] = "Anne";
    //thay đổi điểm của SV003 môn thứ 2 thành 10
    $student["SV003"]["score"][2] = 10;
    //in ra thông tin sinh viên gồm: tên, giới tính nam/nữ, tổng điểm
    echo "<br>";
    if(!empty($student)) {
        foreach ($student as $key => $value) {
            $name = $value["name"];
            $sex = ($value["sex"] == 1) ? "Boy" :"Girl" ;
            // hàm tính tổng
            $score = array_sum($value["score"]);
            echo "Name: " .$name. "-sex:" .$sex. "-score: " .$score. "<br>";
        }
    }