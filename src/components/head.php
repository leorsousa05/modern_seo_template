<head>
  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta name="robots" content="index, follow">
  
  <title><?= $this->e($pageTitle) ?> | <?= $this->e($siteName) ?></title>
  
  <meta name="description" content="<?= $this->e($pageDescription) ?>">
  
  <meta name="keywords" content="<?= $this->e($keywords) ?>">
  
  <meta name="author" content="<?= $this->e($author) ?>">
  
  <link rel="icon" href="<?= $this->e($faviconUrl) ?>" type="image/x-icon">
  
  <link rel="canonical" href="<?= $this->e($canonicalUrl) ?>">
  
  <meta property="og:title" content="<?= $this->e($ogTitle) ?>">
  <meta property="og:description" content="<?= $this->e($ogDescription) ?>">
  <meta property="og:url" content="<?= $this->e($ogUrl) ?>">
  <meta property="og:image" content="<?= $this->e($ogImage) ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= $this->e($siteName) ?>">
  
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= $this->e($twitterTitle) ?>">
  <meta name="twitter:description" content="<?= $this->e($twitterDescription) ?>">
  <meta name="twitter:image" content="<?= $this->e($twitterImage) ?>">
  <meta name="twitter:site" content="<?= $this->e($twitterSite) ?>">
    <link rel="stylesheet" type="" href="public/css/output.css">
  
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "<?= $this->e($organizationName) ?>",
    "url": "<?= $this->e($organizationUrl) ?>",
    "logo": "<?= $this->e($organizationLogo) ?>",
    "sameAs": [
      "<?= $this->e($facebookPage) ?>",
      "<?= $this->e($instagramPage) ?>",
      "<?= $this->e($linkedinPage) ?>"
    ]
  }
  </script>
</head>
