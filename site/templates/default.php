<?php snippet('header')?>
<h1><?= $page->title() ?></h1> <!---shows title of current page,$page works when u point it to txt field-->
<?= $page->text() ?><!---shows text of current page-->
<?= $page->intro() ?>

<footer class="footer">
    <a href="https://twitter.com/ <?= $site->twitter()?>">Follow us on twitter </a>
</footer>
</body>
</html>

