<!-- 구글 검색 : galley board css => CSS Only Pinterest-like Responsive Board Layout - Boardz.css | CSS ... -->
<!-- 출처 : https://www.cssscript.com/css-pinterest-like-responsive-board-layout-boardz-css/ -->
<?PHP
// MySQL 데이터베이스 연결
$connect = mysql_connect("localhost","kdg","1114");
// DB 선택
mysql_select_db("kdg_db", $connect);
// sql 쿼리 string 생성
if($_GET[mode]=='search')
{
    $sql = "select * from boardz where title like '%$_POST[ab]%'";
}
else {
    $sql = "select * from boardz";
}

// sql 쿼리 실행
$result = mysql_query($sql);
// 결과 row 값 가져오기!
$row = mysql_fetch_array($result);



?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8"> 

    <title>Boardz Demo</title>
    <meta name="description" content="Create Pinterest-like boards with pure CSS, in less than 1kB.">
    <meta name="author" content="Burak Karakan">
    <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
    <link rel="stylesheet" href="src/boardz.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wingcss/0.1.8/wing.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="seventyfive-percent  centered-block">
        <!-- Sample code block -->
        <div>    
            <hr class="seperator">

            <!-- Example header and explanation -->
            <div class="text-center">
                <h2>Beautiful <strong>Boardz</strong></h2>
                <div style="display: block; width: 50%; margin-right: auto; margin-left: auto; position: relative;">
                    <form class="example" action="board.php?mode=search" method ="post">
                        <input type="text" placeholder="Search.." name="ab">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <!--<hr class="seperator fifty-percent">-->
            <?php
            $num = mysql_num_rows($result);
                echo (" <div class=\"boardz centered-block beautiful\">
                <ul>");
                    for($i=1; $i <=($num/3 + ($num%3 >= 1 ? 1 : 0));$i++){
                        echo ("<li>
                        <h1>$row[title]</h1>
                        <img src=$row[image_url] alt=\"demo image\"/>
                    </li>");
                        $row = mysql_fetch_array($result);
                    }
                    echo ("</ul>
                            <ul>");
                    for($i=1; $i <= ($num/3+ ($num%3 == 2 ? 1 : 0));$i++){
                         echo ("<li>
                            <h1>$row[title]</h1>
                             <img src=$row[image_url] alt=\"demo image\"/>
                             </li>");
                            $row = mysql_fetch_array($result);
                        }
                    echo ("</ul>
                            <ul>");
            for($i=1; $i <= ($num/3);$i++){
                echo ("<li>
                            <h1>$row[title]</h1>
                             <img src=$row[image_url] alt=\"demo image\"/>
                             </li>");
                $row = mysql_fetch_array($result);
            }
            echo"</ul></div>"
            ?>



        <hr class="seperator">

    </div>
</body>
</html>