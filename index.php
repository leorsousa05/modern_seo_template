<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
require_once __DIR__ . '/src/config/functions.php'; // Adicione esta linha

use League\Plates\Engine;

$info = require __DIR__ . '/src/config/info.php';

$templates = new Engine(__DIR__ . '/src/views');

Flight::route('/', function () use ($templates, $info) {
    echo $templates->render('home', [
        'info' => $info
    ]);
});


Flight::route('/servicos', function () use ($templates, $info) {
    echo $templates->render('services', [
        'info' => $info
    ]);
});

Flight::route('/mapa-site', function () use ($templates, $info) {
    echo $templates->render('sitemap', [
        'info' => $info
    ]);
});

Flight::route('/@slug', function ($slug) use ($templates, $info) {
    $contentData = getContentBySlug($slug);
    if (empty($contentData)) {
        echo $templates->render('404', ['info' => $info]);
        return;
    }

    $pageInfo = array_merge($info, [
        'title' => $contentData['title'] ?? 'Título Padrão',
        'description' => $contentData['description'] ?? 'Descrição Padrão',
    ]);

    echo $templates->render('conversionPage', [
        'info' => $pageInfo,
        'slug' => $slug
    ]);
});

Flight::start();
