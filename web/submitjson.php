<?php
if(isset($_POST['properties'])&&isset($_POST['content'])&&isset($_POST['custom'])&&$_POST['properties']!=''&&$_POST['content']!=''&&$_POST['custom']!='')
{
  require_once('../vendor/autoload.php');
  //use Postmark\PostmarkClient;

// Example request
$client = new Postmark\PostmarkClient("1855200c-7830-4422-a59a-4835d3a6acd0");

//file_put_contents('json-to-approve/'.$_POST['properties'].'-to-'.$_POST['content'],$_POST['custom']);
extract(parse_url($_ENV["DATABASE_URL"]));
$dsn = 'pgsql:dbname='.substr($path, 1).';host='.$host.';user='.$user.';port=5432;password='.$pass;
try
{
  $db = new PDO($dsn);
}
catch(PDOException $pe)
{
  die('Connection error, because: ' .$pe->getMessage());
}
$query = 'INSERT INTO "translations"("properties", "language", "status", "json") VALUES(\''.$_POST['properties'].'\', \''.$_POST['content'].'\', \'Submitted\', \''.$db->quote($_POST['custom']).'\')';
$result = $db->exec($query);

if($result==1)$sendResult = $client->sendEmail(
  "mjacquet@salesforce.com",
  "mjacquet@gmail.com",
  "Nouvelle demande d'ajout Community Translater",
  $_POST['properties']." -> ".$_POST['content']."   ".$_POST['custom']
);
else die("SUBMISSION ERROR".$query);

echo '<div class="slds-notify slds-notify--success slds-theme--alert-texture" role="alert">
  <span class="slds-assistive-text">Info</span>
  <button class="slds-button slds-button--icon-inverse close slds-icon--small">
    <svg aria-hidden="true" class="slds-button__icon">
      <use xlink:href="/assets/icons/action-sprite/svg/symbols.svg#close"></use>
    </svg>
    <span class="slds-assistive-text">Close</span>
  </button>
  <h2>
    <svg aria-hidden="true" class="slds-icon icon-text-email slds-icon--small slds-m-right--x-small">
      <use xlink:href="/assets/icons/action-sprite/svg/symbols.svg#email"></use>
    </svg>JSON submitted. We will review and publish it ASAP.</h2>
</div>';

}

 ?>


<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="stylesheets/salesforce-lightning-design-system.css">
  </head>
  <body>
    <div class="slds-container--center slds-container--medium">
      <div class="slds-card" style="padding:10px;">
        <div class="slds-card__header slds-grid">
          <div class="slds-media slds-media--center slds-has-flexi-truncate">
            <div class="slds-media__figure">
              <svg aria-hidden="true" class="slds-icon slds-icon-custom-78 ">
                <use xlink:href="icons/custom-sprite/svg/symbols.svg#custom78"></use>
              </svg>
            </div>
            <div class="slds-media__body">
              <h2 class="slds-text-heading--small slds-truncate">Napili Community Translater</h2>
            </div>

             <div class="slds-col slds-no-flex slds-align-bottom">
              <div class="slds-button-group" role="group">
                <button class="slds-button slds-button--neutral" onclick="window.location='index.php'">Tool Home</button>
                <button class="slds-button slds-button--neutral" onclick="window.location='filetojson.php'">Generate JSON from file</button>
                <button class="slds-button slds-button--neutral" onclick="window.location='contact.php'">Contact</button>
              <!--  <div class="slds-button--last">
                  <button class="slds-button slds-button--icon-border-filled">
                    <svg aria-hidden="true" class="slds-button__icon">
                      <use xlink:href="icons/utility-sprite/svg/symbols.svg#down"></use>
                    </svg>
                    <span class="slds-assistive-text">More</span>
                  </button>
                </div>-->
              </div>
            </div>

          </div>
        </div>
        <div class="slds-card__body">
            <div class="slds-text-body--regular">This tool is not an official Salesforce Tool and is to be used at your own risk.</div>
        </div>
      </div>
      <br>
<form role="form" enctype="multipart/form-data" action="submitjson.php" method="POST" class="slds-form--stacked">
      <div class="slds-card" style="padding:10px;">
        <div class="slds-card__header slds-grid">
          <div class="slds-media slds-media--center slds-has-flexi-truncate">
            <div class="slds-media__figure">
              <svg aria-hidden="true" class="slds-icon slds-icon--small" style="fill:#54698d">
                <use xlink:href="icons/utility-sprite/svg/symbols.svg#upload"></use>
              </svg>
            </div>
            <div class="slds-media__body">
              <h2 class="slds-text-heading--small slds-truncate">Provide JSON and details</h2>
            </div>
          </div>
        </div>
        <div class="slds-card__body" >
          <div class="slds-form-element">
            <label class="slds-form-element__label" for="sample1">Properties Language</label>
            <div class="slds-form-element__control">
              <input class="slds-input" type="text" name="properties" />
            </div>
          </div>
          <div class="slds-form-element">
            <label class="slds-form-element__label" for="sample1">Content Language</label>
            <div class="slds-form-element__control">
              <input class="slds-input" type="text" name="content" />
            </div>
          </div>
          <div class="slds-form--element">
            <label class="slds-form-element__label" for="sample1">JSON content</label>
            <div class="slds-form-element__control">
              <textarea  class="slds-textarea" placeholder="" rows="10" name="custom"></textarea>
            </div>
          </div>
        </div>
    </div>
    <br>
    <div class="slds-form-element">
      <input type="submit" value="Submit Translated JSON" class="slds-button slds-button--brand"/>
    </div>
</form>


    </div>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71699020-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
