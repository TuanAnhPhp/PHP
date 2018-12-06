<html>
<head>
    <title>Mô phỏng máy ATM</title>
    <style type="text/css">
        .content {
            margin: 20px auto;
            width: 700px;
            border: 1px solid #999;
            padding: 10px;
            background: aqua;
        }
        .content .info {
            height: 150px;
            padding: 0px;
        }
        .content .info h1 {
            color: red;
            text-align: center;
        }
        .content .info input[name="money"] {
            width: 300px;
            height: 30px;
        }
        .content .info input[type="submit"] {
            width: 70px;
            height: 30px;
        }
        .content div.info img {
            width: 200px;
            margin: 10px;
            float: left;
            border-radius: 5px;
        }
        .clr {
            clear: both;
        }
        .result .normal p {
            display: inline-table;
            font-size: 18px;
            font-weight: bold;
            padding: 0px;
            text-align: center;
        }
        .result .normal p.col1 {
            width: 200px;
            text-align: left;
        }
        .result .normal p.col2 {
            width: 200px;
            text-align: center;
        }
        .result .normal p.col3 {
            width: 200px;
            text-align: right;
        }
        p.total {
            color: red;
        }
    </style>
</head>
<body>
<div class="content">
    <?php
    $money =0;
    if(isset($_POST["money"])) $money = $_POST["money"];
    ?>
    <div class="info">
        <img src="image/hoasen.jpg">
        <h1>Mô phỏng máy ATM</h1>
        <form method="post">
            <p>Vui lòng nhập số tiền mà quý khách muốn thực hiện giao dịch</p>
            <input type="text" name="money" value="<?php echo number_format($money)?>">
            <input type="submit" value="Rút tiền">
        </form>
    </div>
    <div class="clr"></div>
    <div class="result">
        <div class="normal">
            <p class="col1">Mệnh giá</p>
            <p class="col2">Số lượng</p>
            <p class="col3">Thành tiền</p>
        </div>
    </div>
    <div class="clr"></div>
    <?php
    define("ONE",1000);
    define("TWO",2000);
    define("FIVE",5000);
    define("ONE_0",10000);
    define("TWO_0",20000);
    define("FIVE_0",50000);
    define("ONE_00",100000);
    define("TWO_00",200000);
    define("FIVE_00",500000);
    $five00 = 0;
    $two00 = 0;
    $one00 = 0;
    $five0 = 0;
    $flagShow = false;
    if(is_numeric($money) && $money > 1000) {
        $flagShow = true;
        while ($money >= FIVE_00) {
            $five00 ++;
            $money = $money - FIVE_00;
        }
        while ($money >= TWO_00) {
            $two00 ++;
            $money = $money - TWO_00;
        }
        while ($money >= ONE_00) {
            $one00 ++;
            $money = $money - ONE_00;
        }
        while ($money >= FIVE_0) {
            $five0 ++;
            $money = $money - FIVE_0;
        }
        $total = FIVE_00 * $five00 + TWO_00 * $two00 + ONE_00 * $one00 + FIVE_0 * $five0;
    }
    ?>
    <?php
    if($five00 > 0) {
        echo ' <div class="result">
                            <div class="normal">
                                <p class="col1">'.number_format(FIVE_00).'</p>
                                <p class="col2">'.$five00.'</p>
                                <p class="col3">'.number_format(FIVE_00 * $five00).'</p>
                            </div>
                        </div>
                        <div class="clr"></div>';
    }
    if($two00 > 0) {
        echo ' <div class="result">
                                <div class="normal">
                                    <p class="col1">'.number_format(TWO_00).'</p>
                                    <p class="col2">'.$two00.'</p>
                                    <p class="col3">'.number_format(TWO_00 * $two00).'</p>
                                </div>
                            </div>
                            <div class="clr"></div>';
    }
    if($one00 > 0) {
        echo ' <div class="result">
                                <div class="normal">
                                    <p class="col1">'.number_format(ONE_00).'</p>
                                    <p class="col2">'.$one00.'</p>
                                    <p class="col3">'.number_format(ONE_00 * $one00).'</p>
                                </div>
                            </div>
                            <div class="clr"></div>';
    }
    if($five0 > 0) {
        echo ' <div class="result">
                                <div class="normal">
                                    <p class="col1">'.number_format(FIVE_0).'</p>
                                    <p class="col2">'.$five0 .'</p>
                                    <p class="col3">'.number_format(FIVE_0 * $five0 ).'</p>
                                </div>
                            </div>
                            <div class="clr"></div>';
    }
    if($flagShow == true) {
        echo '<p class="total">Tổng tiền:'.number_format($total).'</p>';
    }
    ?>
</div>
</body>
</html>
