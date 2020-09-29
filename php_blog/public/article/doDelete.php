<?php
require_once __DIR__ . "/../connect/config.php";

$id = $_GET['id'];

$sql ="
DELETE FROM article
WHERE id = {$id}
";

$rs = mysqli_query($dbConn,$sql);

if ( $rs ){
    ?>
<script>
    alert('삭제완료');
    location.replace('list.php');
</script>
<?php 
} else {
    ?>
<script>
    alert('삭제실패');
    history.back();
</script>
<?php
}
?>
