<?php $this->layout('../layouts/default', ['info' => $info, 'title' => 'Mapa Site']); ?>
<?php require_once dirname(__DIR__) . '/config/functions.php'; ?>

<?php $this->start('mainContent'); ?>

<h1 class="text-2xl font-bold mb-4">Bem-vindo ao Sitemap!</h1>

<ul class="list-disc pl-5">
    <?php
    $keys = getKeysFromJson('texts.json');
    
    foreach ($keys as $key) {
        echo '<li class="mb-2">';
        echo '<a href="/' . htmlspecialchars($key) . '" class="text-blue-500 hover:underline">' . htmlspecialchars($key) . '</a>';
        echo '</li>';
    }
    ?>
</ul>

<?php $this->stop(); ?>

