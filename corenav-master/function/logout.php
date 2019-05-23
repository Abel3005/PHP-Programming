<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-05-08
 * Time: 오후 4:48
 */
    session_start();

    unset($_SESSION[id]);
    unset($_SESSION[pw]);

    echo"<script>location.replace('../index.php')</script>";
?>