<?php $this->title = 'Mon profil'; ?>

<section class="masthead_biography">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">VOTRE PROFIL</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">C'est tout simplement vous!</h2>
      </div>
    </div>
</section>

<?= $this->session->show('update_password'); ?>
<div id="container" class="container bg-dark text-center">
    <h2 class="text-white"><?= $this->session->get('pseudo'); ?></h2>
    <p class="text-white"><?= $this->session->get('id'); ?></p>
    <div>
    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
    </div>
    </br>
    <div>
    <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
    </div>
    <br>
    <div>
    <a href="../public/index.php">Retour à l'accueil</a>
    </div>
</div>
