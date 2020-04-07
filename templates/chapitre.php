<?php $this->title = 'Chapitres'; ?>

<!-- Header -->
<section class="masthead_biography">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">LES CHAPITRES</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Retrouvez ci-dessous les chapitres!</h2>
      </div>
    </div>
</section>

    <?php
foreach ($articles as $article)
{
    ?>
    <div id="container" class="container bg-dark text-center">
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
        <div class="text-white"><?= substr($article->getContent(), 0, 600);?>...<br><br><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>">Lire la suite</a></div>
        <p class="text-white"><?= htmlspecialchars($article->getAuthor());?></p>
        <p class="text-white">Créé le : <?= htmlspecialchars(strftime('%d-%m-%Y',strtotime($article->getCreatedAt())));?></p>
    </div>
    <br>
    <?php
}
?>

