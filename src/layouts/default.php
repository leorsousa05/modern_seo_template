<!DOCTYPE html>
<html>
<?php $this->insert('../components/head', [
    'pageTitle' => $title,
    'siteName' => $info['siteName'],
    'pageDescription' => $info['pageDescription'],
    'keywords' => $info['keywords'],
    'author' => $info['author'],
    'faviconUrl' => $info['faviconUrl'],
    'canonicalUrl' => $info['canonicalUrl'],
    'ogTitle' => $info['ogTitle'],
    'ogDescription' => $info['ogDescription'],
    'ogUrl' => $info['ogUrl'],
    'ogImage' => $info['ogImage'],
    'twitterTitle' => $info['twitterTitle'],
    'twitterDescription' => $info['twitterDescription'],
    'twitterImage' => $info['twitterImage'],
    'twitterSite' => $info['twitterSite'],
    'organizationName' => $info['organizationName'],
    'organizationUrl' => $info['organizationUrl'],
    'organizationLogo' => $info['organizationLogo'],
    'facebookPage' => $info['facebookPage'],
    'instagramPage' => $info['instagramPage'],
    'linkedinPage' => $info['linkedinPage']
]) ?>    
<body>
    <?php $this->insert('../components/header') ?> 
    <main>
        <?= $this->section('mainContent') ?>
    </main>
    <?php $this->insert('../components/footer') ?>
</body>
</html>
