<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-03-27
 * Time: 오후 5:12
 */
    $age = 68;
    $fee = "5,000";

    if($age >= 65)
    {
        $fee = "무료";
    }

    echo "나이 : $age 세, 입장료 : $fee";
    ?>