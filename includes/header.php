<?php

// Allowed languages
$allowed_langs = ['en', 'gu', 'hi', 'mr'];

// Get lang from URL (default: en)
$lang = $_GET['lang'] ?? 'en';

// If invalid, redirect to default
if (!in_array($lang, $allowed_langs)) {
    header("Location: /en/home");
    exit;
}
// Load translation file
$lang_file = __DIR__ . '/../languages/' . $lang . '.json';
if (!file_exists($lang_file)) {
    header("Location: /en/home");
    exit;
}

$json = file_get_contents($lang_file);
$t = json_decode($json, true);

// Translation function
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
