<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-03-28
 * Time: 오후 5:47
 */
    $sum = 0;
    for($i = 1; $i <=100; $i++){
        if($i % 5 == 0){
            $sum += $i;
        }
    }
    echo $sum;
    ?>