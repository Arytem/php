<!DOCTYPE html>
<html>
<head>
    <title>Артем Юдичев</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число x (между -1 и 1):</p>
        <input type="text" name="x">
        <p>Введите число n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        $b = 0;
            for($a=0; $a<=$n; $a++){
                $b=$b+(((2*$a-1)*($x**(2*$n+1)))/(2*$n*(2*$n+1)));
            }
        $b=$x+$b;
        $b=(3.14/2)-$b;
        echo $b;
    ?>
</body>
</html>