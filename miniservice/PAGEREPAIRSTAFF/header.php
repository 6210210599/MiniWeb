<?php session_start();
require "../connect_db/config.ini.php";
require "repairmenu.php";
if($_SESSION["position_id"] != '3'){
    echo "<meta http-equiv='refresh'content='0;url=../index.php'>";
}elseif($_SESSION["position_id"] == ''){
    echo "<meta http-equiv='refresh'content='0;url=../index.php'>";
}
?>