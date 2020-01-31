<?php $this->title = 'Modifier mot mot de passe'; ?>

<section class="masthead_biography">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">MISE A JOUR DU MOT DE PASSE</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Veuillez changer votre mot de passe ci-dessous</h2>
        <a href="../templates/chapitre.php" class="btn btn-primary js-scroll-trigger">CHAPITRES</a>
      </div>
    </div>
</section>

  <div id="container" class="container bg-dark text-center">
    <p class="text-white">Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
    <form method="post" action="../public/index.php?route=updatePassword">
        <label class="text-white" for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <label class="text-white" for="password">Confirmer le mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <input class="btn btn-outline-primary" type="submit" value="Mettre à jour" id="submit" name="submit" style="margin-top: 10px;">
    </form>
    <br>
    <a href="../public/index.php?route=profile">Retour au profil</a>
</div>