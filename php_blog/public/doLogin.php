<?php
$dbHost = "127.0.0.1";
$dbName = 'php_blog';
$dbId = 'sbsst';
$dbPw = 'sbs123414';
$dbPort = 3306;

$conn = mysqli_connect($dbHost,$dbId,$dbPw,$dbName,$dbPort) or die ("fail");

$loginId = $_POST['loginId'];
$loginPw = $_POST['loginPw'];

$sql = "
SELECT * FROM member
WHERE loginId = '$loginId'
";

$result = $conn -> query($sql);

// 만약 아이디가 존재하면 비밀번호검사
if (mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);

    // 비밀번호 맞다면 세션 생성

    if ($row['loginPw']==$loginPw){
        $_SESSION['loginId']=$loginId;
        if (isset($_SESSION['loginId'])){
            ?>
            <script>
                alert('로그인 되었습니다.');
                location.replace("./main.php");
            </script>
<?php
        }
        else {
            echo "session fail";
        }
    } else {
        ?>
        <script>   
        alert('비밀번호가 잘못되었습니다.');
        history.back();
        </script>
        <?php
    }
} else {
?>
<script>
    alert('존재하지 않는 회원입니다.');
    history.back();
</script>
<?php
}
?>