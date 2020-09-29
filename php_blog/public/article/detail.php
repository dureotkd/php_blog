<?php
require_once __DIR__ . "/../connect/config.php";
include "../../part/head.php";

$id = $_GET['id'];

$sql = "
UPDATE article
SET hit = hit + 1
WHERE id = {$id}
";
mysqli_query($dbConn,$sql);

$sql = "
SELECT A.*, M.nickname AS memberName
FROM article AS A
INNER JOIN member AS M
ON A.memberId = M.id
WHERE A.id = {$id}
";
$rs = mysqli_query($dbConn,$sql);
$article = mysqli_fetch_assoc($rs);
?>

<div class="contents">
    <h2>디테일</h2>
    <p><?=$article['id']?></p>
    <p><?=$article['memberName']?></p>
    <p><?=$article['title']?></p>
    <p><?=$article['body']?></p>
    <p>조회수 : <?=$article['hit']?></p>
    <a href="modify.php?id=<?=$article['id']?>" class="blue">수정</a>
    <a href="doDelete.php?id=<?=$article['id']?>" class="red" onclick="if ( confirm('삭제할까요?') == false ) return false;">삭제</a>
</div>

<?php
include "../../part/foot.php";
?>