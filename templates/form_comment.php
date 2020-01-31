<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">
    <div class="col-lg-12 text-center">
    <label for="pseudo" class="text-white">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
    </div>
    <div class="col-lg-12 text-center">
    <label for="content" class="text-white">Message</label><br>
    <textarea id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>
    </div>
    <div class="col-lg-12 text-center" style="padding-top: 15px; padding-bottom: 10px">
    <input type="submit" value="<?= $submit; ?>" id="submit" name="submit">
    </div>
</form>