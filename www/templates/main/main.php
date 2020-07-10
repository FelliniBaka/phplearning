<?php include __DIR__.'/../header.php'; ?>
    <div class="main-container">
        <main class="content">
            <?php foreach ($articles as $article): ?>
            <div class="article">
                <h2 class="article-header"><a href="/article/<?= $article->getId() ?>"><?= $article->getName() ?></a></h2>
                <p class="article-text"><?= $article->getText() ?></p>
                <p class="article-author">by: <?= $article->getAuthor()->getNickname() ?:'<i>unknown</i>' ?></p>
            </div>
            <?php endforeach; ?>
        </main>
<?php include __DIR__.'/../footer.php'; ?>