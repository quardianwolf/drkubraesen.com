<link rel="canonical" href="<?= base_url(); ?>" />
<base href="<?= base_url(); ?>" />

<?php if ($GLOBALS['settings']['compress'] == "offline") : ?>

<!-- 
  <link rel="stylesheet" href="<?= theme('/css/css.css'); ?>">
   -->
 
   <link rel="stylesheet" href="<?= theme('css/css.css'); ?>" >
   <link rel="stylesheet" href="<?= theme('css/css-1.css'); ?>" >
   <link rel="stylesheet" href="<?= theme('css/css-2.css'); ?>" >
   <link rel="stylesheet" href="<?= theme('css/css-3.css'); ?>" >

   <link rel="stylesheet" href="<?= theme('css/bootstrap.min.css'); ?>" >

   <link rel="stylesheet" href="<?= theme('css/structure.css'); ?>" >
   <link rel="stylesheet" href="<?= theme('css/church3.css'); ?>" >
   <link rel="stylesheet" href="<?= theme('css/rs6.css'); ?>" >

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />



<?php else : ?>

  <link rel="stylesheet" href="<?= theme('dist/client_all_styles.min.css'); ?>" />

<?php endif; ?>