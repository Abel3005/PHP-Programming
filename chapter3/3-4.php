<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-03-27
 * Time: 오후 5:17
 */
    $pilgi = 95;
    $silgi = 55;
    $result = "합격";

    if($pilgi < 70 || $silgi < 80)
    {
        $result = "불합격";
    }

    echo "필기 점수 : $pilgi, 실기 점수 : $silgi<br>";
    echo "결과 : $result";
    ?>