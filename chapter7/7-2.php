<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-03-29
 * Time: 오전 11:55
 */
    $connect = mysql_connect("localhost", "kdg", "1114");
    mysql_select_db("kdg_db", $connect);

    if($_GET[mode] == "insert")
    {
        $sum = $_POST[sub1] + $_POST[sub2] + $_POST[sub3] + $_POST[sub4] + $_POST[sub5];
        $avg = $_POST[sum] / 5;

        $sql = "insert into stud_score(name, sub1, sub2, sub3, sub4, sub5, sum, avg) values";
        $sql .= "('$_POST[name]', '$_POST[sub1]', '$_POST[sub2]', '$_POST[sub3]', '$_POST[sub4]', '$_POST[sub5]', '$sum', '$avg')";
        $result = mysql_query($sql, $connect);

    }
    ?>
<meta http-equiv="content-type" content="text/html; charset= utf-8" />
<h3> 1) 성적 입력하기</h3>

<form action="7-2.php?mode=insert" method="post">
    <table width="800" border ="1" cellpadding="5">
        <tr><td> 이름 : <input type=text" size="6" name="name">&nbsp;
                과목1 : <input type ="text" size="2" name="sub1">&nbsp;
                과목2 : <input type ="text" size="2" name="sub2">&nbsp;
                과목3 : <input type ="text" size="2" name="sub3">&nbsp;
                과목4 : <input type ="text" size="2" name="sub4">&nbsp;
                과목5 : <input type ="text" size="2" name="sub5">
            </td>
            <td align="center">
                <input type="submit" value="입력하기">
            </td>
        </tr>
    </table>
</form>

<p>
    <h3>2) 성적 출력하기</h3>
<p><a href="7-2.php?mode=big_first">[성적순 정렬]</a>
    <a href="7-2.php?mode=small_first">[성적역순 정렬]</a></p>
<p>
    <!-- 제목 표시 시작 -->
    <table width="720" border="1" cellpadding="5">
    <tr align="center" bgcolor="#eeeeee">
        <td>번호</td>
        <td>이름</td>
        <td>과목1</td>
        <td>과목2</td>
        <td>과목3</td>
        <td>과목4</td>
        <td>과목5</td>
        <td>평균</td>
        <td>&nbsp;</td>
    </tr>
    <!-- 제목 표시 끝 -->

    <?php
    //select 명령 저장
    if($_GET[mode] =="big_first")
        $sql = "select * from stud_score order by sum desc";
    else if ($_GET[mode] == "small_first")
        $sql = "select * from stud_score order by sum";
    else
        $sql = "select * from stud_score";

    $result = mysql_query($sql);
    $count = 1;

    // 데이터 베이스 데이터 출력 시작
    while ($row = mysql_fetch_array($result))
    {
        $avg = round($row[avg],1);
        $num = $row[num];

        echo ("<tr align='center'>
            <td> $count </td>
            <td> $row[name] </td>
            <td> $row[sub1] </td>
            <td> $row[sub2] </td>
            <td> $row[sub3] </td>
            <td> $row[sub4] </td>
            <td> $row[sub5] </td>
            <td> $row[sum] </td>
            <td> $avg </td>
            <td> <a href='7-3.php?num=$num'>[삭제]</a></td>
            </tr>
            
            ");
        $count++;
    }

    mysql_close();
    ?>
</table>
</p>


