<?php
$lang = $_GET['lang'] ?? 'en';
$page = $_GET['page'] ?? 'home';

header("Location: /$lang/$page");
exit;
