<?php $this->title = 'Accueil'; ?>


<!-- Header -->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Billet simple pour l'Alaska</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Découvrez la folle histoire de Jean Forteroche dans cet immense pays</h2>
      </div>
    </div>
  </header>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Avant gout</h4>
            <p class="text-black-50 mb-0">N'ayez pas peur de vous lancer dans cette nouvelle aventure. Ci-dessous un leger avant gout de ce qui vous attend dans ce magnifique roman.</p>
          </div>
        </div>
      </div>

      <?php $i = 0;
      foreach($articles as $article) :
      ?>
      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters <?= ($i==0) ? 'mb-5 mb-lg-0' : '' ?>">
        <div class="col-lg-6">
        <img class="img-fluid" src="<?= ($i==0) ? 'img/demo-image-01.jpg' : 'img/demo-image-02.jpg' ?>" alt="">
        </div>
        <div class="col-lg-6 <?= ($i==0) ? '' : 'order-lg-first' ?>">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-<?= ($i==0) ? 'left' : 'right' ?>">
              <h4><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h4>
              <div class="text-white"><?= substr($article->getContent(), 0 , 180); ?> ...</div>
              <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $i++?>
      <?php endforeach; ?>


    </div>
  </section>

