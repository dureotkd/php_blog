<?php 
include "../../part/head.php";

// 절대 경로 require_once __DIR__
require_once __DIR__ . "/../connect/config.php";
// isset 이런 변수가 입력이 안되면 ~~~  
if ( isset($_GET['searchKeyword']) == false ){
    $_GET['searchKeyword'] = '';
}
$searchKeyword = $_GET['searchKeyword'];

if ( isset($_GET['page']) == false ){
    $_GET['page'] = 1;
}

$itemsInAPage = 10;

$page = $_GET['page'];

$from = ($page-1) * $itemsInAPage;

$sql = "
SELECT CEIL(COUNT(*) / 10) AS totalPage
FROM article
WHERE displayStatus = 1
";
$rs = mysqli_query($conn, $sql);

$count = mysqli_fetch_assoc($rs);
$totalPage = $count['totalPage'];

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
ORDER BY id DESC
LIMIT {$from},{$itemsInAPage}
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
    <div><a href="./detail.php?id=<?=$row['id']?>">NO : <?=$row['id']?>/ <?=$row['regDate']?> /
            <?=$row['title']?></a></div>
    <?php } ?>
</div>
    <?php 
    for ( $i = 1; $i <= $totalPage; $i++ ){ ?>
    <?php 
    $class = '';
    if ( $i == $page ){
        $class = "current";
    }
    ?>
    <span class="<?=$class?>"><a href="list.php?page=<?=$i?>"><?=$i?></a></span>
    <?php }
    ?>


<?php 
include "../../part/foot.php";
?>