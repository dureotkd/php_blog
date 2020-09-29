<?php
require_once __DIR__ . "/../connect/config.php";
include "../../part/head.php";
?>

<div class="contents">
    <h2>회원가입</h2>
    <form action="doJoin.php" class="contents" method="POST">
        <label for="">이름</label>
        <input type="text" name=name>
        <label for="">닉네임</label>
        <input type="text" name=nickname >
        <label for="">아이디</label>
        <input type="text" name=loginId>
        <label for="">비밀번호</label>
        <input type="text" name=loginPw>
        <input type="submit" value="가입">
    </form>
</div>

<?php
include "../../part/foot.php";
?>