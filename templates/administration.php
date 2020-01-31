<?php $this->title = 'Administration'; ?>

<section class="masthead_biography">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">ESPACE ADMINISTRATION</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Modification possible ci-dessous</h2>
        <a href="../templates/chapitre.php" class="btn btn-primary js-scroll-trigger">CHAPITRES</a>
      </div>
    </div>
</section>

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>

<div class="container bg-dark">
<h2 class="text-white">Articles</h2>
<a href="../public/index.php?route=addArticle">Nouvel article</a>
<table style="width: 100%">
    <tr style="color: red">
        <td>Id</td>
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
            <td class="text-white"><?= htmlspecialchars($article->getId());?></td>
            <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
            <td class="text-white"><?= htmlspecialchars($article->getAuthor());?></td>
            <td class="text-white">Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
            <td>
                <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<h2 class="text-white">Commentaires signalés</h2>
<table style="width: 100%">
    <tr style="color: red">
        <td>Id</td>
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
            <td class="text-white"><?= htmlspecialchars($comment->getId());?></td>
            <td class="text-white"><?= htmlspecialchars($comment->getPseudo());?></td>
            <td class="text-white"><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
            <td class="text-white">Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
            <td>
                <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<h2 class="text-white">Utilisateurs</h2>
<table style="width: 100%">
    <tr style="color: red">
        <td>Id</td>
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
            <td class="text-white"><?= htmlspecialchars($user->getId());?></td>
            <td class="text-white"><?= htmlspecialchars($user->getPseudo());?></td>
            <td class="text-white">Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
            <td class="text-white"><?= htmlspecialchars($user->getRole());?></td>
            <td class="text-white">
                <?php
                if($user->getRole() != 'admin') {
                ?>
                <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
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