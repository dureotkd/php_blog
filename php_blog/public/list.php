<?php 
include "../part/head.php";

$dbHost = "127.0.0.1";
$dbId = 'sbsst';
$dbPw = 'sbs123414';
$dbPort = 3306;
$dbName = 'php_blog';

$conn = mysqli_connect($dbHost,$dbId,$dbPw,$dbName,$dbPort);

$sql = "
SELECT * FROM article
ORDER BY id DESC
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
include "../part/foot.php";
?>