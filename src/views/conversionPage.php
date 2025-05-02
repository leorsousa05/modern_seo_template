<?php $this->layout('../layouts/default', ['info' => $info, 'title' => $info['title']]); ?>
<?php require_once dirname(__DIR__) . '/config/functions.php'; ?>

<?php $this->start('mainContent'); ?>

<h1 class="text-2xl font-bold mb-4"><?=$info['title']?></h1>

<?php
$currentSlug = $slug;
$content = getContentBySlug($currentSlug);

if ($content) {
    echo '<div class="prose">' . htmlspecialchars($content['content']) . '</div>';
} else {
    echo '<p>Conteúdo não encontrado.</p>';
}
?>

<?php $this->stop(); ?>
