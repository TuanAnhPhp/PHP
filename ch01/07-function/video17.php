<html>
<head>
    <title>Hàm trong PHP</title>
</head>
<style type="text/css">
    * {
        margin: 0px;
        padding: 0px;
    }
    div.content {
        width: 800px;
        height: auto;
        border: 2px solid red;
        margin: 20px auto;
        padding: 20px;
    }
    div.content div {
        border: 1px solid blue;
        padding: 5px;
        text-align: center;
        margin-bottom: 10px;
    }
    div.content div p {
        font-weight: bold;
    }
    div.content div p span {
        font-style: italic;
    }
</style>
<body>
<div class="content">
    <?php
    //hàm không có tham số
    /* function createBox() {
         echo ' <div style="width: 200px; height: 50px">';
         echo ' <p>Box A <span>(300*200)</span></p>';
         echo '</div>';
     }
    createBox();
    createBox();
     */
    function createBox() {
        $value = '<div style="width: 200px; height: 50px">';
        $value .= ' <p>Box A <span>(300*200)</span></p>';
        $value .= '</div>';
        //trả về kết quả $value đang chứa
        return $value;
    }
    $result = createBox();
    echo $result;
    function checkNumber() {
        $value = 12;
        if($value %2 == 0) {
            return true;
        }
        else {
            return false;
        }
    }
    $kq = checkNumber();
    if($kq == true) {
        echo "là số chẵn";
    }
    else {
        echo "là số lẻ";
    }
    ?>
</div>
</body>
</html>