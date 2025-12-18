<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio Jeff Benard</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>
<?php
    $uri = $_SERVER['REQUEST_URI'] ?? '/';

    $pages = [
        '/' => 'Accueil',
        '/project' => 'Projets',
        '/contact' => 'Contact'
    ];

    $keys = array_keys($pages);
    $currentIndex = array_search($uri, $keys);

    if ($currentIndex === false)
        $currentIndex = 0;

    $prevIndex = ($currentIndex - 1 < 0) ? count($keys) - 1 : $currentIndex - 1;
    $nextIndex = ($currentIndex + 1 >= count($keys)) ? 0 : $currentIndex + 1;

    $prevLink = $keys[$prevIndex];
    $nextLink = $keys[$nextIndex];
?>
<body>
    <header class="vscode-header">
        
        <div class="top-bar">
            <div class="nav-controls">
                <a href="<?= $prevLink ?>" class="arrow" title="Page précédente">&larr;</a>
                <a href="<?= $nextLink ?>" class="arrow" title="Page suivante">&rarr;</a>
            </div>
    
            <div class="search-bar">
                <span class="search-icon">🔍</span>
                <span class="search-text">portfolio_jeff</span>
            </div>
    
            <div class="contact-controls">
                <a href="#">
                    <span class="control-icon">📞</span>
                </a>
                <a href="#">
                    <span class="control-icon">✉️</span>
                </a>
            </div>
        </div>
    
        <nav class="tabs-bar">
            <a href="/" class="tab <?= ($uri === '/' || $uri === '/home') ? 'active' : '' ?>">
                <span class="file-icon php-icon">php</span>
                <span class="file-name">index.php</span>
                <span class="close-icon">×</span>
            </a>
    
            <a href="/project" class="tab <?= str_contains($uri, '/project') ? 'active' : '' ?>">
                <span class="file-icon php-icon">php</span>
                <span class="file-name">project.view.php</span>
                <span class="close-icon">×</span>
            </a>
    
            <a href="/contact" class="tab <?= str_contains($uri, '/contact') ? 'active' : '' ?>">
                <span class="file-icon php-icon">php</span> <span class="file-name">contact.view.php</span>
                <span class="close-icon">×</span>
            </a>
        </nav>
    
    </header>
<main>

