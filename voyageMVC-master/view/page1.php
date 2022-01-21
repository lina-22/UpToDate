<?php $title = 'Home'; ?>

<?php ob_start();?> 

<div>
<h1>Template MVC</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, alias nam. Natus doloribus aliquam, laborum officiis, maiores sunt modi id iure architecto soluta vitae iusto mollitia, sint optio nesciunt cupiditate?</p>
<p>Repellendus aliquam quo atque labore suscipit fuga explicabo optio perspiciatis quod, porro aperiam, ex cum ipsa iste deleniti vitae tempora iusto assumenda rem excepturi quia fugiat quasi magni aut! Harum?</p>
<p>Placeat provident odio exercitationem est. Laborum eius illo deleniti recusandae saepe dolores qui est maxime voluptates, corporis omnis quos voluptatibus pariatur ea reiciendis maiores reprehenderit? Modi nulla distinctio vitae nam!</p>
<p>Pariatur minima quasi minus, vel corporis vitae mollitia et fugiat quod inventore eligendi quidem eum veritatis, incidunt, error consectetur consequuntur asperiores ab magni obcaecati rem. Voluptatibus earum sequi sint sunt?</p>
<a href='?path=main&action=page2'>Lien page 2</a>
</div>";
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>