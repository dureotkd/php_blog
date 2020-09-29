<?php
include "../../part/head.php";
require_once __DIR__ . "/../connect/config.php";

$sql = "
SELECT * FROM board
";

$rs = mysqli_query($dbConn,$sql);

$boards = [];

while ( $board = mysqli_fetch_assoc($rs) ){
    $boards[] = $board;
}

?>

<div class="contents">
<h2>글쓰기</h2>
    <form action="doWrite.php" method="POST" >
        <select name="boardId" id="">
    <?php forEach ( $boards as $board ) { ?>
        <option value="<?=$board['id']?>"> 
        <?=$board['name']?>
        </option>
    <?php } ?>
    </select>
        <p>제목</p>
    <input type="text" name=title>
        <p>내용</p>
    <input type="text" name=body>
    <input type="submit">
    </form>
</div>



<?php
include "../../part/foot.php";
?>