<?php 
include "../../part/head.php";
?>

<div class="contents">
    <form method="POST" action="doJoin.php">
        <table style="padding-top:50px" align=center width=700 border=0 cellpadding=2>
            <tr>
                <td height=20 align=center bgcolor=#ccc>
                    <font color=white>회원가입</font>
                </td>
            </tr>
            <tr>
                <td bgcolor=white>
                    <table class="table2">
                        <tr>
                            <td>이름</td>
                            <td><input type=text name=name size=60></td>
                        </tr>
                        <tr>
                            <td>닉네임</td>
                            <td><input type=text name=nickname size=60></td>
                        </tr>
                        <tr>
                            <td>이메일</td>
                            <td><input type=email name=email size=60></td>
                        </tr>
                        <tr>
                            <td>아이디</td>
                            <td><input type=text name=loginId size=60></td>
                        </tr>

                        <tr>
                            <td>비밀번호</td>
                            <td><input type=password name=loginPw cols=85 rows=15></input></td>
                        </tr>
                    </table>
                    <center>
                        <input type="submit" value="작성">
                    </center>
                </td>
            </tr>
        </table>
</div>


<?php 
include "../../part/foot.php";
?>
