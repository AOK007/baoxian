<?php
header('Content-type: application/json');
$DB_HOST="192.168.4.251";
$DB_USER="ccc01";
$DB_PASSWORD="Qq2389110614";
$db_NAME="ccc01";
$content = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $db_NAME);//连接函数，返回连接句柄
mysqli_set_charset($content, 'utf-8');
if ($content) {
    echo "连接成功--";
} else {
    die("连接失败：" . mysqli_connect_error());
}
$username=$_POST['username'];
$age=$_POST['age'];
$idcard=$_POST['idcard'];
$moble=$_POST['moble'];
$kkyinhang=$_POST['kkyinhang'];
$kkuser=$_POST['kkuser'];
$shengxiao=$_POST['shengxiao'];
$dzyinhang=$_POST['dzyinhang'];
$dzuser=$_POST['dzuser'];
$sex=$_POST['sex'];
$baodan=$_POST['baodan'];
$sxdata=$_POST['sxdata'];
$tjdata=$_POST['tjdata'];
$ywname=$_POST['ywname'];
$zsname=$_POST['zsname'];
$zsuser=$_POST['zsuser'];
$zsmoble=$_POST['zsmoble'];
$bdcentent=$_POST['bdcentent'];
$jindu=$_POST['jindu'];
$sqlStr = "insert into dtyw VALUES ('$username',$age,'$idcard','$moble','$kkyinhang','$kkuser','$shengxiao','$dzyinhang','$dzuser','$sex','$baodan','$sxdata','$tjdata','$ywname','$zsname','$zsuser','$zsmoble','$bdcentent','$jindu')";
if (mysqli_query($content, $sqlStr)) {
    echo "插入数据成功";
} else {
    echo "插入数据失败";
    }
mysqli_close($content);


