<?php
if (isset($_POST)) {
    $bankinh = 0;
    if (isset($_POST['bankinh']) && is_numeric($_POST['bankinh']) && ($_POST['bankinh'] > 0)) {
        $bankinh = $_POST['bankinh'];
    }
    function chuvi($bankinh){
        $chuvi = 2*3.14*$bankinh;
        return $chuvi;
    }

    function dientich($bankinh){
        $dientich = 3.14*$bankinh*$bankinh;
        return $dientich;
    }
}else {
    echo "Nhap lai!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="main-container">
    <div class="container">
        <form action="circle.php" method="post" name="">
            <h1>Hinh tron</h1>
            <p>Ban Kinh:</p>
            <input type="text" name="bankinh">
            <input type="submit" name="" id="">
        </form>
        <h1>Ket qua:<?php if (isset($_POST['bankinh']) && is_numeric($_POST['bankinh']) >0){
            echo "chu vi la:" . chuvi($bankinh);
            echo '<br>';
            echo "dien tich la:" . dientich($bankinh);
        }else{
            echo "Nhap lai";
        }
        ?>
        </h1>
    </div>
</div>



</body>
</html>