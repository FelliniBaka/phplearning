<?php $header = 'Php Learning - ' . $article->getName(); ?>
<?php include __DIR__.'/../header.php'; ?>
    <div class="main-container">
    <main class="content">
        <div class="article">
            <h2 class="article-header"><?= $article->getName() ?></a></h2>
            <p class="article-text"><?= $article->getText() ?></p>
            <p class="article-author">by: <?= $article->getAuthor()->getNickname() ?:'<i>unknown</i>' ?></p>
        </div>
    </main>
<?php include __DIR__.'/../footer.php'; ?>