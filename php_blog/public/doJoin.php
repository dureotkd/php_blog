<?php 
$dbHost = "127.0.0.1";
$dbId = 'sbsst';
$dbPw = 'sbs123414';
$dbName = 'php_blog';
$dbPort = 3306;

$conn = mysqli_connect($dbHost,$dbId,$dbPw,$dbName,$dbPort) or die ('FAIL');

$URL = './home/main.php';

$email = $_POST['email'];
$loginId = $_POST['loginId'];
$loginPw = $_POST['loginPw'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];

$sql = "
INSERT INTO member (regDate,updateDate,loginId,loginPw,name,nickname,email)
values(NOW(),NOW(),'$loginId','$loginPw','$name','$nickname','$email')
";

$result = $conn -> query($sql);

if ( $result ){
?> <script>
    alert('가입이 완료되었습니다.');
    location.replace('login.php');
</script>
<?php } 
    else {
?>
<script>
    alert('가입실패');
</script>
<?php 
    }
    mysqli_close($conn);
?>