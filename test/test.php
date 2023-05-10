<?php ob_start() ?>
<div class="container d-flex bg-warning align-items-center justify-content-center">
<form method="POST">
</form>
    


<?php
    $content =ob_get_clean();
    require "../template.php";
?>