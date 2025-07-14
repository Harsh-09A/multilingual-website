<?php
$lang = $_GET['lang'] ?? 'en';
$json = file_get_contents(__DIR__ . '/../languages/' . $lang . '.json');
$t = json_decode($json, true);

function t($key) {
    global $t;
    return $t[$key] ?? $key;
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <title><?= t('title') ?></title>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
