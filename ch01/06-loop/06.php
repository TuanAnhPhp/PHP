<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Break-Continue</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
        $n=0;
        for ($i=0;$i<=100;$i+=8){
            if ($n<3){
                if ($i%8==0 && $i>0){
                    echo $i . "<br/>";
                    $n++;
                }
            }else{
                break;
            }
        }
    ?>
</body>
</html>