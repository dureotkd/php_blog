<?php
    session_start();
    $result = session_destroy();

    if ( $result ){
        ?>
<script>
    alert('로그아웃 완료');
    history.back();
</script>
<?php
    }
?>