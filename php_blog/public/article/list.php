<?php 
include "../../part/head.php";

// 절대 경로 require_once __DIR__
require_once __DIR__ . "/../connect/config.php";
// isset 이런 변수가 입력이 안되면 ~~~  
if ( isset($_GET['searchKeyword']) == false ){
    $_GET['searchKeyword'] = '';
}
$searchKeyword = $_GET['searchKeyword'];

$sql = "
SELECT COUNT(*) AS cnt
FROM article
WHERE displayStatus = 1
";
$articleCount = mysqli_query($conn, $sql);

$sql = "
SELECT * FROM article
WHERE 1 
";

if (!empty($searchKeyword)){
    $sql .= "
    AND title LIKE '%{$searchKeyword}%'
    ";
}
$sql .= "
ORDER BY id DESC LIMIT 100
";

$rs = mysqli_query($conn, $sql);
$rows = [];

while ( $row = mysqli_fetch_assoc($rs)){
    $rows[] = $row;
}
?>


<div class="l-contents">
    <h1>게시물 리스트</h1>
    <?php foreach ( $rows as $row ) { ?>
    <div><a href="./detail.php?id=<?=$row['id']?>">카테고리 NO : <?=$row['boardId']?>/ <?=$row['regDate']?> /
            <?=$row['title']?></a></div>
    <?php } ?>
</div>


<?php 
include "../../part/foot.php";
?>