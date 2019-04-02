<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-03-28
 * Time: 오후 5:34
 */
    $a =2;

    echo ( "<html>
        <body>
        <h3>2단 구구단표 만들기</h3>
        <table border=''1' width ='100'>");
    $b =1;
    while ($b<=9) {
        $c = $a * $b;
        echo "<tr><td align = 'center'>$a x $b = $c</td></tr>";
        $b++;

    }
    echo "</table>
</body>
</html>";
    ?>