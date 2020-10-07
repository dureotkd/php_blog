<?php
require_once __DIR__ . "/../connect/config.php";

$title = $_POST['title'];
$body = $_POST['body'];
$id = $_POST['id'];

$sql="
UPDATE article
SET updateDate = NOW(),
title = {$title},
body = {$body},
WHERE id = {$id}
";

$rs = mysqli_query($conn,$sql);

if ( $rs ){
?> <script?>alert('수정이 성공하였습니다.');
location.replace('detail.php?id=<?=$id?>');
</script>
<?php
}
?>