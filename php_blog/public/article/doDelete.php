<?php
require_once __DIR__ . "/../connect/config.php";

$id = $_GET['id'];

$sql = "
DELETE FROM article
WHERE id = {$id}
";

mysqli_query($conn,$sql);
?>
<script>
alert('삭제되엇습니다');
location.replace('list.php');
</script>