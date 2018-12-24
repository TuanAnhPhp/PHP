<?php

$path = "uploads/";
$valid_formats = array("jpg", "png", "gif", "bmp","PNG",'JPG','GIF');
$valid_type = array('image/gif','image/jpeg','image/png','image/bmp');
if (isset($_POST)) {
    $name = $_FILES['photoimg']['name'];
    $size = $_FILES['photoimg']['size'];
    $type = $_FILES['photoimg']['type'];
    if (strlen($name)) {
        list($txt, $ext) = explode(".", $name);
        if (in_array($ext, $valid_formats)) {
            if(in_array($type, $valid_type)){
                if ($size < (1024 * 1024)) {
                    $actual_image_name = time() . substr(str_replace(" ", "_", $txt), 5) . "." . $ext;
                    $tmp = $_FILES['photoimg']['tmp_name'];
                    if (move_uploaded_file($tmp, $path . $actual_image_name)) {
                        echo "<img src='uploads/" . $actual_image_name . "'  class='preview'>";
                    } else
                        echo "Lỗi không xác đinh";
                } else
                    echo "Tối đa upload 1 MB";
            } else
            echo "Không đúng định dạng";
        } else
            echo "Không đúng định dạng";
    } else
        echo "Hãy chọn một hình ảnh !";
}
