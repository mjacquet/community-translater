<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylesheets/salesforce-lightning-design-system.css">
  <style>
  #uploadBtn {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
  </style>
</head>
<body>

<form enctype="multipart/form-data" action="translate.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Name of input element determines name in $_FILES array -->
    Upload the XML from site.com <input name="thefile" type="file" class="slds-button slds-button--brand"/>
<div class="slds-form-element">
      <input id="uploadFile" placeholder="Choose File" disabled="disabled" class="slds-input"/>
      <div class="fileUpload btn btn-primary">
          <span>Upload</span>
          <input id="uploadBtn" name="thefile" type="file" class="slds-button slds-button--brand" />
      </div>

</div>
    What is the base language of the file?

    <div class="slds-form-element">
      <label class="slds-form-element__label" for="selectSample1">Select Label</label>
      <div class="slds-form-element__control">
        <select id="baseLanguage" name="baseLanguage" class="slds-select">
          <option>French</option>
          <option>English</option>
        </select>
      </div>
    </div>

    <input type="submit" value="Get French Translation" class="slds-button slds-button--brand"/>
</form>
</body>
</html>
<?php
/*
require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->run();*/
