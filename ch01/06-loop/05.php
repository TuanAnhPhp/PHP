<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image gallery</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="content3">
    <h1>Image gallery</h1>
    <div class="image">
        <?php
            $i=1;
            do {
                echo ' <img src="image/n' . $i . '.jpg"/>';
                $flagShow = 0;
                if (isset($_GET["show"])){
                    $flagShow = $_GET["show"];
                    $i++;
                }

            }while($i<=4 && $flagShow == 1)
        ?>

        <a href="05.php?show=1">Show all</a>
        <a href="05.php?show=0">Show demo</a>
    </div>

</div>
</body>
</html>