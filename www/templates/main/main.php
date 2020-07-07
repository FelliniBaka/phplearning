<?php include __DIR__.'/../header.php'; ?>
<?php foreach ($articles as $article): ?>

    <h2><a href="/article/<?= $article->getId() ?>"><?= $article->getName() ?></a></h2>
    <p><?= $article->getText() ?></p>
    <p>by: <?= $article->getAuthor()->getNickname() ?:'<i>unknown</i>' ?></p>
    <hr>
<?php endforeach; ?>
<?php include __DIR__.'/../footer.php'; ?>