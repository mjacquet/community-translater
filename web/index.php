<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
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
    width:100%;
    height:100%;
}
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
  </style>
  <script>
  window.onload=function(){
  document.getElementById("uploadBtn").onchange = function () {
      document.getElementById("uploadFile").value = this.value;
      };
  };
  </script>
</head>
<body>
<div class="slds-container--center slds-container--small">
  <div class="slds-card">
    <div class="slds-card__header slds-grid">
      <div class="slds-media slds-media--center slds-has-flexi-truncate">
        <div class="slds-media__figure">
          <svg aria-hidden="true" class="slds-icon slds-icon-standard-contact slds-icon--small">
            <use xlink:href="icons/standard-sprite/svg/symbols.svg#contact"></use>
          </svg>
        </div>
        <div class="slds-media__body">
          <h2 class="slds-text-heading--small slds-truncate">Napili Community Translater</h2>
        </div>
      </div>
    </div>
    <div class="slds-card__body">
        <div class="slds-text-body--regular">This tool is not an official Salesforce Tool and is to be used at your own risk.</div>
    </div>
  </div>
<form enctype="multipart/form-data" action="translate.php" method="POST" class="slds-form--stacked">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Name of input element determines name in $_FILES array -->
  <!--  Upload the XML from site.com <input name="thefile" type="file" class="slds-button slds-button--brand"/>-->
<div class="slds-form--inline">
   <label class="slds-form-element__label" for="name">Upload the XML from site.com</label>

  <div class="slds-form-element">
        <div class="fileUpload slds-button slds-button--brand">
            <span class="">Upload</span>
            <input id="uploadBtn" name="thefile" type="file"  />
        </div>

      </div>
    <div class="slds-form-element">
        <input id="uploadFile" placeholder="Choose File" disabled="disabled" class="slds-input"/>
    </div>
</div>


    <div class="slds-form-element">
      <label class="slds-form-element__label" for="selectSample1">What is the base language of the file?</label>
      <div class="slds-form-element__control">
        <select id="baseLanguage" name="baseLanguage" class="slds-select">
          <option>French</option>
          <option>English</option>
        </select>
      </div>
    </div>
    <div class="slds-form-element">
      <input type="submit" value="Get French Translation" class="slds-button slds-button--brand"/>
    </div>



  <div class="slds-form-element">
    <label class="slds-form-element__label" for="sample2">FR-to-FR json</label>
    <div class="slds-form-element__control">
  <textarea id="frtofr" class="slds-textarea" placeholder="" rows="20"><? echo file_get_contents('json/FR-to-FR') ?></textarea>
  </div>
  </div>
  <div class="slds-form-element">
    <label class="slds-form-element__label" for="sample2">EN-to-FR json</label>
    <div class="slds-form-element__control">
  <textarea id="frtofr" class="slds-textarea" placeholder="" rows="20"><? echo file_get_contents('json/EN-to-FR') ?></textarea>
  </div>
  </div>

</form>
</div>
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
