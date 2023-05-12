<?php ob_start() ?>
<h1>bonjour</h1>
<?php require 'calculatrice.php' ?>
<div class="d-flex col gap-1">
<div class=" "><input type="submit" class="btn btn-primary "value="1"></div>
<div class=" "><input type="submit" class="btn btn-primary "value="2"></div>
<div class=" "><input type="submit" class="btn btn-primary "value="3"></div>
<div class=" "><input type="submit" class="btn btn-primary "value="4"></div>
<div class=" "><input type="submit" class="btn btn-primary "value="5"></div>
<div class=" "><input type="submit" class="btn btn-primary "value="6"></div>
<div class=""><input type="submit" class="btn btn-primary "value="7"></div>
<div class=" "><input type="submit" class="btn btn-primary "value="8"></div>
<div class=" "><input type="submit" class="btn btn-primary "value="9"></div>
</div>
<?php
    $content =ob_get_clean();
    require "../template.php";
?>