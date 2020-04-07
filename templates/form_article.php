<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<section class="masthead_biography">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Modifier votre article</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Inspiration</h2>
      </div>
    </div>
</section>

<section id="contact-form">
  <div id="container" class="container bg-dark text-center">
    <form method="post" action="../public/index.php?route=<?= $route; ?>">
    <div class="offset-lg-3 col-lg-6">
        <div class="form-group text-center">
        <label class="text-white" for="title">Titre</label><br>
        <input class="form-control text-center" type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
        <?= isset($errors['title']) ? $errors['title'] : ''; ?>
        </div>
        </div>
        <div class="offset-lg-12 col-lg-12">
        <div class="form-group text-center">
        <label class="text-white" for="content">Contenu</label><br>
        <textarea class="form-control w100 p-3" id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        </script>
        </div>
        </div>
        <div id="input_form_article" class="col-lg-12 text-center">
        <input type="submit" class="btn btn-primary mt-4 px-4" value="<?= $submit; ?>" id="submit" name="submit">
        </div>
        </form>
  


  