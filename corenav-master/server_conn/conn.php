<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-05-08
 * Time: 오후 4:16
 */
session_start();
$conn = mysql_connect("localhost", "kdg", "1114");
mysql_select_db("makeWeb",$conn);
?>