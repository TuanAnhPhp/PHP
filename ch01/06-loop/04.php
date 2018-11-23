<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chép Phạt</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="content">
    <h1>Chép phạt</h1>
    <ul>
        <?php
        $i=1;
        do{
            echo "<li>Em hứa sẽ làm bài tập ở nhà đầy đủ</li>";
            $i++;
        }while($i <=20);
        ?>
    </ul>
</div>
</body>
</html>