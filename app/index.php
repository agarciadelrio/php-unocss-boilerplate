<?php
$title = 'PHP unocss boilerplate & AlpineJS';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="/assets/vendor/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="/assets/vendor/reset-tailwind.min.css">
  <link rel="stylesheet" href="/assets/styles/vars.css">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <script src="/assets/js/string.js"></script>
  <script>
    window.__unocss = {
      shortcuts: [
        {
          mainH1: 'p-4 bg-red-300 rounded-md shadow-lg hover:bg-green-300 cursor-pointer overflow-hidden',
        }
      ]
    }
  </script>
  <script src="/assets/vendor/unocss.js"></script>
</head>
<body>
  <h1 class="mainH1"><?= $title ?></h1>
</body>
</html>