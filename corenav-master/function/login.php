<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-05-08
 * Time: 오후 4:34
 */
    include "../server_conn/conn.php";

    $id = $_POST[id];
    $pw = $_POST[pw];

    $sql = "select* from user where id = '$id''";
    $result = mysql_query($sql,$conn);
    $row = mysql_fetch_array();

    if($row){
        if($pw == $row[pw]){
            $_SESSION[id] = $id;
        }
        else{
            echo "<script>alert('로그인 실패!')</script>";
        }

    }
    else{
        echo "<script>alert('아이디가 존재하지 않습니다.')</script>";
    }
?>
<script>location.replace("../index.php");</script>
