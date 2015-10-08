<?php
defined('_JEXEC') or die;
// Variables de entorno Joomla!
$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Parámetros de la plantilla
$params = $app->getTemplate(true)->params;

// Variables y parámetros de opción de plantilla
$sitetitle = $this->params->get('sitetitle');
$logofile = $this->params->get('logoFile');
$jqueryout = $this->params->get('jqueryout');
$jqueryouturl = $this->params->get('jqueryouturl');
$facebookURL = $this->params->get('facebookURL');
$twitterURL = $this->params->get('twitterURL');
$youtubeURL = $this->params->get('youtubeURL');
$linkedinURL = $this->params->get('linkedinURL');
$whatsappURL = $this->params->get('whatsappURL');
$instagramURL = $this->params->get('instagramURL');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
<?php $doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/estilos.css'); ?>
<?php if ($this->params->get('jqueryout')) : ?>
  <script src="<?php echo $jqueryouturl ?>"></script>
<?php endif; ?>
<?php $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/scripts.js'); ?>
</head>
<?php if ($this->params->get('developermode')) : ?>
<body class="desarrollo">
<?php else :?>
<body>
<?php endif; ?>
  <header>
      <div class="ed-container">
        <div class="ed-item web-30 cross-center main-center relative">
          <div class="hasta-web icon-menu toggle-menu"></div>
            <?php if ($logofile) : ?>
              <a href="<?php echo $this->baseurl; ?>/">
                <img src="<?php echo $logofile ?>" class="logo" alt="<?php echo $sitetitle ?>"/>
              </a>
            <?php endif; ?>
            <h2><a href="<?php echo $this->baseurl; ?>/"><?php echo $sitetitle ?></a></h2>
        </div>
        <div class="ed-item web-70 cross-center web-main-end">
        <nav>
        	<jdoc:include type="modules" name="menu" style="none" />
        </nav>
      </div>
    </div>
  </header>

  <jdoc:include type="modules" name="slider" style="none" />

  <jdoc:include type="modules" name="features" style="none" />

  <jdoc:include type="modules" name="team" style="none" />

	<!-- Inicio Contenido Joomla -->
  <div class="ed-container">
		<jdoc:include type="modules" name="position-3" style="xhtml" />
		<jdoc:include type="message" />
		<jdoc:include type="component" />
		<jdoc:include type="modules" name="position-2" style="none" />
  </div>
	<!-- Fin Contenido Joomla -->

  <footer>
      <div class="ed-container">
        <div class="ed-item web-50 tablet-cross-center">
          <p>&copy; <?php echo $sitetitle ?></p>
        </div>
        <div class="ed-item web-50 tablet-main-end tablet-cross-center">
          <div class="sociales">

            <?php if ($this->params->get('facebookURL')) : ?>
              <a href="<?php echo $facebookURL ?>" class="icon-facebook" target="_blank"></a>
            <?php endif ?>

            <?php if ($this->params->get('twitterURL')) : ?>
              <a href="<?php echo $twitterURL ?>" class="icon-twitter" target="_blank"></a>
            <?php endif ?>

            <?php if ($this->params->get('youtubeURL')) : ?>
              <a href="<?php echo $youtubeURL ?>" class="icon-youtube" target="_blank"></a>
            <?php endif ?>

            <?php if ($this->params->get('linkedinURL')) : ?>
              <a href="<?php echo $linkedinURL ?>" class="icon-linkedin" target="_blank"></a>
            <?php endif ?>

            <?php if ($this->params->get('whatsappURL')) : ?>
              <a href="<?php echo $whatsappURL ?>" class="icon-whatsapp" target="_blank"></a>
            <?php endif ?>

            <?php if ($this->params->get('instagramURL')) : ?>
              <a href="<?php echo $instagramURL ?>" class="icon-instagram" target="_blank"></a>
            <?php endif ?>

          </div>
        </div>
      </div>
    </footer>
</body>
</html>