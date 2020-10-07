<?php
require_once __DIR__ . '/../connect/config.php';

$URL = './list.php';
$title = $_POST['title'];
$body = $_POST['body'];

$sql = "
INSERT INTO article 
(regDate,title,body,boardId,memberId,displayStatus,hit)
values(NOW(),'$title','$body',1,1,1,0)
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