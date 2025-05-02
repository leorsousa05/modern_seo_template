<?php $this->layout('../layouts/default', ['info' => $info, 'title' => 'Home']); ?>
<?php $this->start('mainContent'); ?>

    <?php $this->insert('../components/hero', ['title' => 'Olá Seu virus']); ?>

<?php $this->stop(); ?>
