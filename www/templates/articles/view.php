<?php $header = 'Php Learning - ' . $article->getName(); ?>
<?php include __DIR__.'/../header.php'; ?>
    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getText() ?></p>
    <p>by: <?= $article->getAuthor()->getNickname() ?:'<i>unknown</i>'?></p>
<?php include __DIR__.'/../footer.php'; ?>