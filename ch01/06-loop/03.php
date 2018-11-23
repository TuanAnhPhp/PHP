<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vẽ tam giác</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="content2">
    <h1>Vẽ tam giác</h1>
    <ul>
        <li><a href="03.php? type=1"><img src="image/1.JPG"></a></li>
        <li><a href="03.php? type=2"><img src="image/2.JPG"></a></li>
        <li><a href="03.php? type=3"><img src="image/3.JPG"></a></li>
    </ul>
    <div class="result">
        <?php
       $result="";
        if (isset($_GET["type"])){
            $type=$_GET["type"];
            switch ($type){
                case 1:
                    $i=1;
                    $n=6;
                    while ($i<=$n){
                        $result.= str_repeat("*",$i). "<br/>";
                        $i++;
                    }
                    break;
                case 2:
                    $i=6;
                    $n=6;
                    while ($i>=1){
                        $result.= str_repeat("*",$i). "<br/>";
                        $i--;
                    }
                    break;
                case 3:
                    $i=1;
                    $n=6;
                    while ($i<=$n){
                        $space = str_repeat("&nbsp;&nbsp;",$n-$i);
                        $character = str_repeat("*",2*$i-1);
                        $result .= $space .$character . "<br/>";
                        $i++;
                   }
                    break;
            }
        }
        echo $result;
        ?>

</div>
</body>
</html>