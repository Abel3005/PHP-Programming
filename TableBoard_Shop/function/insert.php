<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, POST로 받아온 내용 입력하기!
    $connect = mysql_connect("localhost", "kdg", "1114");
    mysql_select_db("kdg_db", $connect);
    if( 0 < $_POST[order_id] && 0 < $_POST[price]  && 0 < $_POST[quantity] && isset($_POST[date])) {
        $sql = "insert into tableboard_shop(order_id, name, price, quantity,date) values('$_POST[order_id]', '$_POST[name]', '$_POST[price]', '$_POST[quantity]', '$_POST[date]')";
        echo $sql;
    }
    $result = mysql_query($sql);

# 참고 : 에러 메시지 출력 방법
if(!$result) {
    echo "<script> alert('insert - error message') </script>";
}
?>

<script>
    location.replace('../index.php');
</script>
