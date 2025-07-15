<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4"><?= t('hero_heading') ?></h1>
                <p class="lead mb-4"><?= t('hero_text') ?></p>
                <a href="#about" class="btn btn-light btn-lg"> <?= t('hero_button') ?></a>
            </div>
        </div>
    </div>
</section>
<!--  -->


<!-- About Us Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="display-5 fw-bold mb-4"><?= t('about_heading') ?> </h2>
                <p class="lead mb-4"><?= t('about_paragraph1') ?> </p>
                <p class="mb-4"><?= t('about_paragraph2') ?></p>
                <p><?= t('about_paragraph3') ?></p>
            </div>
            <div class="col-lg-6">
                <img src="/assets/images/banner.jpg" class="img-fluid" alt="Property Banner">
            </div>
        </div>
    </div>
</section>


<!-- <div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <h1><?= t('hero_heading') ?></h1>
            <p><?= t('hero_text') ?></p>
        </div>
        <div class="col-lg-6">
            <img src="/assets/images/banner.jpg" class="img-fluid" alt="Property Banner">
        </div>
    </div>
</div> -->
<?php include '../includes/footer.php'; ?>