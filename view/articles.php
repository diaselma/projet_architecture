<?php 
	include 'includes/header.php';  
?>

<h1>Les Articles de categorie <?= $categorieLibelle['libelle'] ?></h1>

<div class="articles">
    <?php if (count($articles) > 0): ?>
        <?php foreach ($articles as $article): ?>
            <article>
                <h2><?= $article['titre'] ?></h2>
                <p><?= $article['contenu'] ?></p>
                <small>Publié le: <?= (new DateTime($article['dateCreation']))->format('d/m/Y H:i:s') ?></small>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <h2> Aucun article trouvé.</h2>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>