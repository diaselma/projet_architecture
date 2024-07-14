<?php include 'includes/header.php'; ?>

<h1>Bienvenue dans notre site web</h1>
<h2>ici vous avez tous les articles</h2>

<div class="articles">
    <?php if (count($articles) > 0): ?>
        <?php foreach ($articles as $article): ?>
            <article>
                <h2><?= $article['titre'] ?></h2>
                <p><?= $article['contenu'] ?></p>
                <p><?= "Catégorie : " . $article['libelle'] ?></p>
                <small>Publié le : <?= (new DateTime($article['dateCreation']))->format('d/m/Y H:i:s') ?></small>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
