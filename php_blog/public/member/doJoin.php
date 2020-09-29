<?php 
require_once __DIR__ . "/../connect/config.php";

$name = $_POST['name'];
$nickname = $_POST['nickname'];
$loginId = $_POST['loginId'];
$loginPw = $_POST['loginPw'];

$sql = "
INSERT INTO `member` 
(regDate,updateDate,name,nickname,loginId,loginPw)
VALUES 
(NOW(),NOW(),'{$name}','{$nickname}','{$loginId}','{$loginPw}')
";

$rs = mysqli_query($dbConn,$sql);

?>
<script>alert('회원가입완료'); location.replace('login.php');</script>