<?php $title = '404'; ?>

<?php ob_start(); ?>
<div class="container">
<h1>404</h1>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>