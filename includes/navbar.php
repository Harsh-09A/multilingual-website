<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/<?= $lang ?>/home"><?= t('title') ?></a>
    <ul class="navbar-nav me-auto">
      <li class="nav-item"><a class="nav-link" href="/<?= $lang ?>/home"><?= t('nav_home') ?></a></li>
      <li class="nav-item"><a class="nav-link" href="/<?= $lang ?>/about"><?= t('nav_about') ?></a></li>
    </ul>
<?php
// Detect current page name without extension or query string
$currentPage = pathinfo(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), PATHINFO_FILENAME);
?>
<form method="get" action="/lang-switcher/set-lang.php" class="ms-3">
    <select name="lang" onchange="this.form.submit()" class="form-select">
        <option value="en" <?= $lang=='en'?'selected':'' ?>>English</option>
        <option value="hi" <?= $lang=='hi'?'selected':'' ?>>हिंदी</option>
        <option value="mr" <?= $lang=='mr'?'selected':'' ?>>मराठी</option>
        <option value="gu" <?= $lang=='gu'?'selected':'' ?>>ગુજરાતી</option>
    </select>
    <input type="hidden" name="page" value="<?= $currentPage ?>">
</form>
  </div>
</nav>
