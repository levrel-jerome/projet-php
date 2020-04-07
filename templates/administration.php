<?php $this->title = 'Administration'; ?>

<section class="masthead_biography">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">ESPACE ADMINISTRATION</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Modification possible ci-dessous</h2>
      </div>
    </div>
</section>

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>

<div id="container_admin" class="container bg-dark">
<h2 class="text-white">Articles</h2>
<a class="btn btn-primary" href="../public/index.php?route=addArticle" role="button"><i class="fas fa-book"> Nouvel article</i></a>
<table id="table_admin">
    <tr>
        <td>Titre</td>
        <td>Auteur</td>
        <td>Date</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($articles as $article)
    {
        ?>
        <tr>
            <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
            <td class="text-white"><?= htmlspecialchars($article->getAuthor());?></td>
            <td class="text-white">Créé le : <?= htmlspecialchars(strftime('%d-%m-%Y',strtotime($article->getCreatedAt())));?></td>
            <td>
                <a class="btn btn-primary" role="button" href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>"><i class="fas fa-paint-brush"> Modifier</i></a></button>
                <a class="btn btn-primary" role="button" href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>"><i class="fas fa-trash-alt"> Supprimer</i></a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<h2 class="text-white">Commentaires signalés</h2>
<table id="table_admin">
    <tr>
        <td>Pseudo</td>
        <td>Message</td>
        <td>Date</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <tr>
            <td class="text-white"><?= htmlspecialchars($comment->getPseudo());?></td>
            <td class="text-white"><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
            <td class="text-white">Créé le : <?= htmlspecialchars(strftime('%d-%m-%Y',strtotime($article->getCreatedAt())));?></td>
            <td>
                <a class="btn btn-primary" role="button" href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>"><i class="fas fa-check-square"> Approuver le commentaire</i></a>
                <a class="btn btn-primary" role="button" href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>"><i class="fas fa-trash-alt"> Supprimer le commentaire</i></a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<h2 class="text-white">Utilisateurs</h2>
<table id="table_admin">
    <tr>
        <td>Pseudo</td>
        <td>Date</td>
        <td>Rôle</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($users as $user)
    {
        ?>
        <tr>
            <td class="text-white"><?= htmlspecialchars($user->getPseudo());?></td>
            <td class="text-white">Créé le : <?= htmlspecialchars(strftime('%d-%m-%Y',strtotime($user->getCreatedAt())));?></td>
            <td class="text-white"><?= htmlspecialchars($user->getRole());?></td>
            <td class="text-white">
                <?php
                if($user->getRole() != 'admin') {
                ?>
                <a class="btn btn-primary" role="button" href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>"><i class="fas fa-trash-alt"> Supprimer</i></a>
                <?php }
                else {
                    ?>
                Suppression impossible
                <?php
                }
                ?>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</div>