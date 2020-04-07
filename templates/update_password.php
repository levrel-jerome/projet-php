<?php $this->title = 'Modifier mot mot de passe'; ?>

<section class="masthead_biography">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">MISE A JOUR DU MOT DE PASSE</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Veuillez changer votre mot de passe ci-dessous</h2>
      </div>
    </div>
</section>

  <div id="container" class="container bg-dark text-center">
    <p class="text-white">Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
    <form method="post" action="../public/index.php?route=updatePassword">
    <div class="offset-lg-3 col-lg-6">
        <label class="text-white" for="password">Mot de passe</label><br>
        <input class="form-control" type="password" id="password" name="password"><br>
        <p class="text-center text-danger"><?= $this->session->show('password'); ?></p>
    </div>
    <div class="offset-lg-3 col-lg-6">
        <label class="text-white" for="checkPassword">Confirmer le mot de passe</label><br>
        <input class="form-control" type="password" id="checkPassword" name="checkPassword"><br>
    </div>
        <a class="btn btn-primary mt-5 mr-5" href="index.php?route=profile"><i class="fa fa-arrow-left"></i> Retour au profil</a>
        <button class="btn btn-primary mt-5 ml-5" type="submit" id="submit" name="submit" value="submit"><i class="fa fa-check"></i> Mettre à jour</button>`

    </form>
</div>