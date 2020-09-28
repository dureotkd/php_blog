<?php 
include "../part/head.php";

$conn = mysqli_connect("127.0.0.1","sbsst","sbs123414","php_blog",3306);
$id = $_GET['id'];
$sql = "
SELECT * FROM
article WHERE id = {$id}
";
$rs = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($rs);
?>


<div class="d_contents">
<h1>디테일</h1>
<p><?=$row['id']?>번</p>
<p><?=$row['regDate']?></p>
<p>제목 : <?=$row['title']?></p>
<p><?=$row['body']?></p>
</div>


<?php 
include "../part/foot.php";
?>