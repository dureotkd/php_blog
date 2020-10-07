<?php 
include "../../part/head.php";

require_once __DIR__ . "/../connect/config.php";

$id = $_GET['id'];

$sql = "
UPDATE article
SET hit = hit +1
WHERE id = {$id}
";
mysqli_query($conn,$sql);

$sql = "
SELECT * FROM
article WHERE id = {$id}
";

$rs = mysqli_query($conn,$sql);
$article = mysqli_fetch_assoc($rs);
?>

<?php if ( $article == null ) {?>
    <h2>게시물이 없음..</h2>
<?php exit;}?>

<div class="d_contents">
<h1>디테일</h1>
<p><?=$article['id']?>번</p>
<p><?=$article['regDate']?></p>
<p>제목 : <?=$article['title']?></p>
<p><?=$article['body']?></p>
<p>조회수 : <?=$article['hit']?></p>
<a href="doDelete.php?id=<?=$article['id']?>" class="red">삭제</a>
<a href="modify.php?id=<?=$article['id']?>" class="blue">수정</a>
</div>


<?php 
include "../../part/foot.php";
?>