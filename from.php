<?php
header('Content-type: application/json');
$DB_HOST="192.168.0.106";
$DB_USER="xxx";
$DB_PASSWORD="Qq2389110614";
$db_NAME="xxx";
$content = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $db_NAME);//连接函数，返回连接句柄
mysqli_set_charset($content, 'utf-8');
if ($content) {
    echo "连接成功--";
} else {
    die("连接失败：" . mysqli_connect_error());
}
$username=$_POST['username'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$moble=$_POST['moble'];
$baoe=$_POST['baoe'];
$jffs=$_POST['jffs'];
$sqlStr = "insert into lyb VALUES ('$username',$age,'$sex','$moble','$baoe','$jffs')";
if (mysqli_query($content, $sqlStr)) {
    echo "插入数据成功";
} else {
    echo "插入数据失败";
    }
mysqli_close($content);


