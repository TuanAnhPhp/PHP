<html>
<head>
    <title></title>
</head>
<style type="text/css">
    .content {
        margin: 20px auto;
        width: 600px;
        border: 1px solid #999;
        padding: 10px;
    }
    .content h1 {
        color: red;
        text-align: center;
    }
    .content div.question{
        margin-top: 20px;
        text-align: center;
    }
    .content div.question p{
        margin: 5px;
    }
    .content div.question p:last-child{
        text-align: right;
        font-style: italic;
        margin-top: 20px;
    }
    .content div.answer p {
        font-weight: bold;
    }
</style>
<body>
<div class="content">
    <h1>Giải câu đố bằng vòng lặp</h1>
    <div class="question">
        <p>Yêu nhau cau sáu bổ ba</p>
        <p>Ghét nhau cau sáu bổ ra làm mười</p>
        <p>Mỗi người một miếng trăm người</p>
        <p>Có mười bảy quả hỏi người ghét yêu</p>
        <p>Hỏi có bao nhiêu người yêu nhau, ghét nhau?</p>
    </div>
    <div class="answer">
        <p>Đáp án</p>
        <ul>
            <?php
            /*
             x, y
            3x + 10y = 100 (nếu x=1 thì y<=9, y=1 thì x<=30)
            x+y = 17
            */
            for($x = 1; $x <= 16; $x++) {
                for($y = 1; $y <= 9; $y++) {
                    if(3*$x + 10*$y == 100 && $x + $y ==17) {
                        echo " <li>$x người yêu nhau, $y người ghét nhau</li>";
                    }
                }
            }
            ?>

        </ul>
    </div>
</div>
</body>
</html>
<?php