<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/localhost" />
  <meta charset="UTF-8" />
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link ref="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link ref="stylesheet" href="global.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/g71eys72jwsqlq94poocl0kmxrk6aukoj5cwnllluhsgyat9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
  <script>
    tinymce.init({
      selector: 'textarea#editor',
      menubar: false
    });
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Questrial&family=Roboto+Condensed:wght@400;700&family=Anton&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./Template/style.css">
</head>

<body style="display:flex; flex-direction:column; min-height: 100vh; margin: 0;">
  <header class="sticky-top" style="min-height: 50px;"> <?php require('navbar.php') ?> </header> <?php require('messageBox.php'); ?>
  <article style="flex: 1;"> <?php $this->controller->renderView(); ?> </article>
  <footer style="min-height: 50px;"> <?php require('footer.php') ?> </footer>
</body>

</html>