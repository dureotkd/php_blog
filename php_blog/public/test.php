<?php 
$dbHost = "127.0.0.1";
$dbPort = 3306;
$dbId = 'sbsst';
$dbPw = 'sbs123414';
$dbName = 'php_blog';

$dbConn = mysqli_connect($dbHost,$dbId,$dbPw,$dbName,$dbPort) or die ("DB CONNECTION ERROR");

$boardId = $_GET['boardId'];

$sql = "
SELECT *
FROM board 
WHERE id = '{$boardId}'
";

$rs = mysqli_query($dbConn,$sql);
$row = mysqli_fetch_assoc($rs);
$boardName = $row['name'];

$sql = "
SELECT * FROM 
article WHERE boardId = '{$boardId}'
ORDER BY id DESC
";

$rs = mysqli_query($dbConn,$sql);
$rows = [];

while ( true ){
    $row = mysqli_fetch_assoc($rs);
    if ( $row == null ){
        break;
    }
    $rows[] = $row;
}
?>

<h1 class="con"><?=$boardName?></h1>

<div class="con">
    <ul>
        <?php foreach ( $rows as $row ) {?>
            <li><a href="detail.php?id=<?=$row['id']?>"><?=$row['title']?></a></li>
        <?php } ?>
    </ul>
</div>



<?php 
include "../part/foot.php";
?>