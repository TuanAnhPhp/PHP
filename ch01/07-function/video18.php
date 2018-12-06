<html>
<head>
    <title>Hàm function</title>
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
</head>
<body>
<div class="content">
    <?php

    $value = "ABC";
    function createBox($content, $width = 150, $height = 50) {
        $result = ' <div style="width: '.$width.'px; height: '.$height.'px;">';
        $result .= ' <p>'.$content.'<span>(300*200)</span></p>';
        $result .= '</div>';
        //hiển thị biến toàn cụ trong hàm
        //cách 1
        // global $value;
        // echo $value;
        echo $GLOBALS["value"];
        return $result;
    }
    $boxA = createBox("Box A");
    echo $boxA;
    //khi truyền biến vào hàm theo kiểu tham trị. sau khi kết thúc hàm giá trị của biến truyền vào không thay đổi
    //khi biến truyền vào theo kiểu tham chiếu. sau khi kết thúc hàm giá trị của biến truyền vào sẽ thay đổi tùy
    //theo phần xử lý của hàm đó
    //&$n1 truyền theo kiểu tham chiếu
    function pow2(&$n1, $n2) {
        $result = 0;
        $n1 = $n1 * $n1;
        $n2 = $n2 * $n2;
        $result = $n1 + $n2;
        return $result;
    }
    $n1 = 2;
    $n2 = 4;
    $number = pow2($n1, $n2);
    echo "Number:".$number."<br>";
    echo "n1:".$n1."<br>";
    echo "n2:".$n2."<br>";
    ?>
</div>
</body>
</html>