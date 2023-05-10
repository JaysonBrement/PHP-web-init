<?php ob_start() ?>
<div class="row-1">
<a href="#"><img src="../image/SPQR.png" alt=""></a>
<a href="#"><img src="../image/france.png" alt=""></a>
<a href="#"><img src="../image/russia.png" alt=""></a>
</div>

<?php
    $content =ob_get_clean();
    require "../template.php";
?>