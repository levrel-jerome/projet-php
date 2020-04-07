<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>
<div class="offset-lg-3 col-lg-6">
    <div class="form-group text-center">
        <p class="text-white"><?= $this->session->get('pseudo'); ?></p>
    </div>
</div>
<form method="post" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">
    <div class="offset-lg-3 col-lg-6">
        <div class="form-group text-center">
            <label for="content" class="text-white">Message</label>
            <textarea id="content" class="form-control" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
            <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        </div>
    </div>
    <div id="button_comment" class="col-lg-12 text-center">
        <button type="submit" class="btn btn-primary mt-4 px-4" id="submit" name="submit" value="submit"><i class="fas fa-plus"></i> <?= $submit; ?></button>
    </div>
</form>