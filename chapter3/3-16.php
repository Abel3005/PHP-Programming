<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-03-28
 * Time: 오후 6:49
 */
    echo ("<html>
       <body>
       <h3>게시판 목록보기</h3>
       <table border='1' width ='600'>
       <tr bgcolor='#ccccc' align='center'><td width='3'>번호</td><td width='30'>제목</td><td width='3'>글쓴이</td><td  width='5'>날짜</td></tr>
   ");
    for($i=1; $i<=10; $i++){
        echo "<tr align='center'><td width='50'>$i</td><td width='100'>게시판 제목 $i</td><td width='50'>홍길동</td><td  width='80'>2013/03/10</td></tr>";
    }
    echo ("
    </table>
    </body>
    </html>
    ");
    ?>