<?php $this->layout('../layouts/default', ['info' => $info, 'title' => 'Home']); ?>
<?php $this->start('mainContent'); ?>

<?php $this->insert('../components/hero') ?>

<?php $this->stop(); ?>
