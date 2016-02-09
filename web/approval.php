<?php

if(isset($_GET['action'])&&isset($_GET['file'])){
  require_once('../vendor/autoload.php');
    //use Postmark\PostmarkClient;

  // Example request
  $client = new Postmark\PostmarkClient("1855200c-7830-4422-a59a-4835d3a6acd0");
$json=$_GET['file'];

postgres://cpdwgioaplythe:VVsW-j66_i_JW5pSDOc_ACV6S_@:5432/dcchj8eabfgcpk

$dsn = 'pgsql:dbname=dcchj8eabfgcpk;host=ec2-54-217-238-100.eu-west-1.compute.amazonaws.com;user=cpdwgioaplythe;port=5432;password=VVsW-j66_i_JW5pSDOc_ACV6S_';
try
{
  $db = new PDO($dsn);
}
catch(PDOException $pe)
{
  die('Connection error, because: ' .$pe->getMessage());
}

if($_GET['action']==approve){
  $query = 'UPDATE "translations" SET "status"=\'Online\' WHERE "id"=\''.$_GET['file'].'\'';
  $result = $db->exec($query);
 if($result==1)$sendResult = $client->sendEmail(
    "mjacquet@salesforce.com",
    "mjacquet@gmail.com",
    "Approved translation Community Translater",
    $_GET['file']
  );
  else die('ERROR!');
}

if($_GET['action']==reject){
  $query = 'UPDATE "translations" SET "status"=\'Rejected\' WHERE "id"=\''.$_GET['file'].'\'';
  $result = $db->exec($query);

  if($result==1)$sendResult = $client->sendEmail(
    "mjacquet@salesforce.com",
    "mjacquet@gmail.com",
    "Rejected translation Community Translater",
    $_GET['file']
  );
  else die('ERROR!');
}




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
            <button class="slds-button slds-button--neutral" onclick="window.location='index.php'">Home</button>
            <button class="slds-button slds-button--neutral" onclick="window.location='filetojson.php'">Generate JSON from file</button>
            <button class="slds-button slds-button--neutral" onclick="window.location='submitjson.php'">Submit a translated JSON</button>
            <button class="slds-button slds-button--neutral" onclick="window.location='contact.php'">Contact</button>
            <!--<div class="slds-button--last">
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
<!--<form enctype="multipart/form-data" action="approval.php" method="POST" class="slds-form--stacked">-->
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Name of input element determines name in $_FILES array -->
  <!--  Upload the XML from site.com <input name="thefile" type="file" class="slds-button slds-button--brand"/>-->
<br>



<?php

$dsn = 'pgsql:dbname=dcchj8eabfgcpk;host=ec2-54-217-238-100.eu-west-1.compute.amazonaws.com;user=cpdwgioaplythe;port=5432;password=VVsW-j66_i_JW5pSDOc_ACV6S_';
try
{
  $db = new PDO($dsn);
}
catch(PDOException $pe)
{
  die('Connection error, because: ' .$pe->getMessage());
}

$query = "SELECT * FROM translations WHERE status='Submitted'";
$jsons = $db->query($query)->fetchAll();
foreach($jsons as $ojson){
  $json=$ojson['id'];
  $prop=$ojson['properties'];
  $target=$ojson['language'];
  $jsonstr=$ojson['json'];
  echo '<div class="slds-card" style="padding:10px;">
    <div class="slds-card__header slds-grid">
      <div class="slds-media slds-media--center slds-has-flexi-truncate">
        <div class="slds-media__figure">
          <svg aria-hidden="true" class="slds-icon slds-icon-custom-78 ">
            <use xlink:href="icons/custom-sprite/svg/symbols.svg#custom78"></use>
          </svg>
        </div>
        <div class="slds-media__body">
          <h2 class="slds-text-heading--small slds-truncate">'.$ojson['properties'].' to '.$ojson['language'].'</h2>
        </div>
        <div class="slds-col slds-no-flex slds-align-bottom">
         <div class="slds-button-group" role="group">
           <button class="slds-button slds-button--neutral" onclick="window.location.assign(\'approval.php?action=approve&file='.$json.'\')">Approve</button>
           <button class="slds-button slds-button--neutral" onclick="window.location.assign(\'approval.php?action=reject&file='.$json.'\')">Reject</button>
         </div>
       </div>
      </div>
    </div>
    <div class="slds-card__body">
        <div class="slds-text-body--regular">
            <div class="slds-form-element">
              <div class="slds-form-element__control">
            <textarea  class="slds-textarea" placeholder="" rows="20" >'.$jsonstr.'</textarea>
            </div>
            </div>
        </div>
    </div>
  </div>';

}
?>



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
