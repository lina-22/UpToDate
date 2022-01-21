<?php $title = 'page2'; ?>

<?php ob_start(); ?>
<div class="container">
<h1>Page 2</h1>

<a href="./">lien page 1 </a>
<br>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>