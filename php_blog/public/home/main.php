<?php 
include "../../part/head.php";

require_once __DIR__ . "/../connect/config.php";

session_start();



if(isset($_SESSION['loginId'])) {
    echo $_SESSION['loginId'];?>님 안녕하세요
    <br/>
<?php
}
?>

<?php 
include "../../part/foot.php";
?>