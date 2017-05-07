<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= $site->description() ?>">
    <meta name="keywords" content="<?= $site->keywords() ?>">
    <meta name="author" content="<?= $site->authors()?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <?php if($favicon = $site->favicon()->toFile()): ?>
      <link rel="icon" href="<?= $favicon->url() ?>" type="image/png">
    <?php endif ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo kirby()->urls()->assets() . '/scripts/hammer.min.js' ?>"></script>
    <script src="<?php echo kirby()->urls()->assets() . '/scripts/jquery.hammer.js' ?>"></script>

    <link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/css/index.css' ?>">

    <?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
      <?php echo css($css->url()) ?>
    <?php endforeach ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-98402740-1', 'auto');
      ga('send', 'pageview');
    </script>

  </head>
