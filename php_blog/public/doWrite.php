<?php
$dbHost = '127.0.0.1';
$dbPort = 3306;
$dbName = 'php_blog';
$dbId = 'sbsst';
$dbPw = 'sbs123414';

$conn = mysqli_connect($dbHost,$dbId,$dbPw,$dbName,$dbPort) or die ('Fail');

$URL = './list.php';

$title = $_POST['title'];
$body = $_POST['body'];

$sql = "
INSERT INTO article 
(regDate,title,body,boardId,memberId,displayStatus)
values(NOW(),'$title','$body',1,1,1)
";

$result = $conn -> query($sql);
if($result) {
?> 
    <script>
        alert("<?php echo "글이 등록되었습니다"?>");
        location.replace("<?php echo $URL?>");
    </script>
<?php
    }
    else {
        echo "FAIL";
    }
    mysqli_close($conn);
?>