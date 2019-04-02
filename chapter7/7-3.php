<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-04-01
 * Time: 오후 7:00
 */
    $connect = mysql_connect("localhost","kdg", "1114");
    mysql_select_db("kdg_db", $connect);

    //필드 num이 $num값을 가지는 레코드 삭제
    $sql = "delete from stud_score where num = $_GET[num]";
    mysql_query($sql, $connect);
?>
    //7-2로 돌아감
    <script>
        location.href = "7-2.php";
    </script>



