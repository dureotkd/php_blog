<?php
require_once __DIR__ . "/../connect/config.php";

$title = $_POST['title'];
$body = $_POST['body'];
$boardId = $_POST['boardId'];
$sql = "
INSERT INTO article 
(regDate,updateDate,title,body,boardId,memberId,displayStatus,hit)
VALUES 
(NOW(),NOW(),'{$title}','{$body}','{$boardId}',1,1,0)
";

$rs = mysqli_query($dbConn,$sql);

if ( $rs ){
    ?>
<script>
    alert('작성완료');
    location.replace('list.php');
</script>
<?php 
} else {
    ?>
<script>
    alert('작성실패');
    history.back();
</script>
<?php
}
?>