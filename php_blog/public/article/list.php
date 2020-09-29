<?php
include "../../part/head.php";
require_once __DIR__ . "/../connect/config.php";

$boardId =$_GET['boardId'];

// 게시판별 게시글 갯수 가저오기..
$sql = "
SELECT boardId, COUNT(*) AS articleCount
FROM board
WHERE id = {$boardId}
";
mysqli_query($dbConn,$sql);



$sql = "
SELECT A.*, M.nickname AS memberName
FROM article AS A
INNER JOIN member AS M
ON A.memberId = M.id
WHERE A.boardId = {$boardId}
ORDER BY A.id DESC
";
$rs = mysqli_query($dbConn,$sql);

$articles = [];

while ( $article = mysqli_fetch_assoc($rs)){
    $articles[] = $article;
}
?>




<div class="contents">
    <h2>리스트(<?=$articleCount?>)</h2>
    <?php if ( count($articles) > 0 ) {?>
    <?php forEach ( $articles as $article ) { ?>
    <div class="contents-item">
    <?=$article['id']?>
    <?=$article['memberName']?>
    <?=$article['title']?>
    <a class="blue" href="detail.php?id=<?=$article['id']?>"><?=$article['body']?></a>
    </div>
    <?php } ?>
    <?php  }  else {?>
        <h2>게시물 아예 없음;;</h2>
    <?php }?>
</div>

<?php
include "../../part/foot.php";
?>