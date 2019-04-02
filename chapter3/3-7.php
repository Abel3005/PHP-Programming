<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-03-27
 * Time: 오후 10:18
 */
    $score = 89;

    if($score >= 90)
    {
        $grade = "A";
    }
    else if( $score >= 85){
        $grade = "B+";
    }
    else if ($score >= 80)
    {
        $grade = "B";
    }
    else if ($score >= 75)
    {
        $grade = "C+";
    }
    else if ($score >= 70)
    {
        $grade = "C";
    }
    else if ($score >= 65)
    {
        $grade = "D";
    }
    else
    {
        $grade = "F";
    }

    echo "입력된 점수 : $score 등급 : $grade";

    ?>