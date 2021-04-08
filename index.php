<?php

include("include/functions.php");

$som1 = null;
$som2 = null;
$som3 = null;


if(isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];


    $som1 = sprintf("<div>%s + %s = %s</div>",$a,$b,optellen($a,$b));
    $som2 = sprintf("<div>%s / %s = %s</div>",$a,$b,delen($a,$b));
    $som3 = sprintf("<div>%s * %s = %s</div>",$a,$b,vermenigvuldigen($a,$b));

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
        <input type="number" name="a" placeholder="waarde a">
        <input type="number" name="b" placeholder="waarde b">
        <input type="submit" value="reken uit" name="submit">
    </form>

    <div class="oplossing">
        <?=$som1?>
        <?=$som2?>
        <?=$som3?>
    </div>

</body>
</html>
