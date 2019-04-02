<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-03-28
 * Time: 오후 5:50
 */
    echo "-------------------<br>";
    echo "&nbsp;&nbsp;&nbsp;섭씨&nbsp;&nbsp;&nbsp;화씨<br>";
    echo "-------------------<br>";

    for($c =-15; $c<= 35; $c += 5){
        $f = ($c*9 / 5) +32;
        echo "&nbsp;&nbsp;&nbsp; $c &nbsp;&nbsp;&nbsp; $f<br>";
    }

    echo "-------------------<br>";
    ?>