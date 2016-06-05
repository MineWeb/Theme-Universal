<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Eywek">

    <title><?= $title_for_layout ?> - <?= $website_name ?></title>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>

    <?= $this->Html->css('style/style.'.$theme_config['theme']) ?>
    <?= $this->Html->css('custom') ?>

	  <?= $this->Html->script('jquery-1.11.0.js') ?>

    <link rel="icon" type="image/png" href="<?= $theme_config['favicon_url'] ?>" />
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

  <div id="all">

    <header>
      <?= $this->element('top') ?>
      <!-- Navbar -->
      <?= $this->element('navbar') ?>
    </header>

    <?php
    $flash_messages = $this->Session->flash();
    if(!empty($flash_messages)) {
      echo '<div class="container">'.$flash_messages.'</div>';
    } ?>

    <?= $this->fetch('content'); ?>
  </div>

  <!-- Footer -->

  <footer>
    <div id="copyright">
      <div class="container">
        <div class="col-md-6">
          <?= $Lang->get('GLOBAL__FOOTER') ?>
        </div>
        <div class="col-md-6">
          <p class="pull-right">Template by <a href="http://bootstrapious.com/free-templates">Bootstrapious</a>
              <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
          </p>
        </div>
      </div>
    </div>
  </footer>


  <?= $this->element('modals') ?>

  <?= $this->Html->script('bootstrap.js') ?>
  <?= $this->Html->script('app.js') ?>
  <?= $this->Html->script('form.js') ?>
  <script>
  // Config FORM/APP.JS

  var LIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'like')) ?>";
  var DISLIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'dislike')) ?>";

  var LOADING_MSG = "<?= $Lang->get('GLOBAL__LOADING') ?>";
  var ERROR_MSG = "<?= $Lang->get('GLOBAL__ERROR') ?>";
  var INTERNAL_ERROR_MSG = "<?= $Lang->get('ERROR__INTERNAL_ERROR') ?>";
  var FORBIDDEN_ERROR_MSG = "<?= $Lang->get('ERROR__FORBIDDEN') ?>"
  var SUCCESS_MSG = "<?= $Lang->get('GLOBAL__SUCCESS') ?>";

  var CSRF_TOKEN = "<?= $csrfToken ?>";
  </script>

  <?php if(isset($google_analytics) && !empty($google_analytics)) { ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '<?= $google_analytics ?>', 'auto');
      ga('send', 'pageview');
    </script>
  <?php } ?>
  <?= $configuration_end_code ?>

</body>

</html>
