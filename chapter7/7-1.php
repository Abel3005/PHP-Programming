<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-03-29
 * Time: 오전 10:54
 */
    $connect = mysql_connect('localhost', 'kdg', '1114');
    $db_con = mysql_select_db("kdg_db", $connect);

    $sql = "create table stud_score( ";
    $sql .= "num int not null auto_increment, ";
    $sql .= "name varchar(12), ";
    $sql .= "sub1 int, ";
    $sql .= "sub2 int, ";
    $sql .= "sub3 int, ";
    $sql .= "sub4 int, ";
    $sql .= "sub5 int, ";
    $sql .= "sum int, ";
    $sql .= "avg float, ";
    $sql .= "primary key(num))";

    $result = mysql_query($sql, $connect);

    if($result)
    {
        echo "데이터 베이스 table stud_score가 생성되었습니다.!!";
    }
    else
    {
        echo "에러!!!";
    }

    mysql_close();
    ?>

