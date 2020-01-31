<?php $this->title = 'Article'; ?>
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase"><?= htmlspecialchars($article->getTitle());?></h1>
        <h2 class="text-white mx-auto my-0">Créé le : <?= htmlspecialchars(strftime('%d-%m-%Y',strtotime($article->getCreatedAt())));?></h2>
        
      </div>
    </div>
  </header>

<div>
    <div id="container" class="container bg-dark text-center">
    <p class="text-white"><?= htmlspecialchars($article->getContent());?></p>
    <br>
    <br>
    <?php if($this->session->get('role') === 'admin') { ?>
    <div class="actions text-center">
    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
    </div>
    <br>
    <div class="actions text-center">
    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
    </div>
    <br>
    <?php } ?>
    <div class="actions text-center">
    <a href="../public/index.php">Retour à l'accueil</a>
    </div>
    
</div>

   
<section id="contact-form">
    <div class="container bg-dark">
        <div class="row">
            <div class="px-sm-5 px-lg-0 col-lg-10 offset-lg-1 mb-5 mt-5">
                <h3 class="text-center mt-5 mb-5 text-white">Ajouter un commentaire</h3>
                <?php include('form_comment.php'); ?>
    </div>
</section>
<section id="contact-form">
    <div class="container bg-dark">
                <?php
                foreach ($comments as $comment)
                {
                ?>
        <h3 class="text-center mt-5 mb-5 text-white">Commentaires</h3>
        <h4 class="text-center mt-5 mb-5 text-white" ><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p class="text-center mt-5 mb-5 text-white"><?= htmlspecialchars($comment->getContent());?></p>
        <p class="text-center mt-5 mb-5 text-white">Posté le <?= htmlspecialchars(strftime('%d-%m-%Y',strtotime($article->getCreatedAt())));?></p>
        <?php
        if($comment->isFlag()) {
            ?>
            <p class="text-center mt-5 mb-5" style="color: red;">Ce commentaire à déjà été signalé</p>
            <?php
        } else {
            ?>
            <p class="text-center mt-5 mb-5"><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php
        }
        ?>
        <?php if($this->session->get('role') === 'admin') { ?>
        <p class="text-center mt-5 mb-5"><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
        <br>
        <?php } ?>
        <?php
    }
    ?>
            </div>
        </div>
    </div>
</section>