<?php
  $dsn = 'pgsql:dbname=d4n2cm2s7mu2bf;host=ec2-54-195-252-202.eu-west-1.compute.amazonaws.com;user=avlzllavitgncj;port=5432;password=qkxXg644DnQzuBhxCSxgCPz4zx';
  try
  {
  	$db = new PDO($dsn);
  }
  catch(PDOException $pe)
  {
  	die('Connection error, because: ' .$pe->getMessage());
  }

$query = "SELECT * FROM translations WHERE status='Online'";
$jsons = $db->query($query)->fetchAll();

?>

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
<form enctype="multipart/form-data" action="translate.php" method="POST" class="slds-form--stacked">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Name of input element determines name in $_FILES array -->
  <!--  Upload the XML from site.com <input name="thefile" type="file" class="slds-button slds-button--brand"/>-->
<br>
  <div class="slds-card" >
    <div class="slds-card__header slds-grid">
      <div class="slds-media slds-media--center slds-has-flexi-truncate">
        <div class="slds-media__figure">
          <svg aria-hidden="true" class="slds-icon slds-icon--small" style="fill:#54698d">
            <use xlink:href="icons/utility-sprite/svg/symbols.svg#upload"></use>
          </svg>
        </div>
        <div class="slds-media__body">
          <h2 class="slds-text-heading--small slds-truncate">Untranslated XML Upload</h2>
        </div>
      </div>
    </div>
    <div class="slds-card__body" >
      <div class="slds-form--inline" style="padding:10px;background:white;">
        <label class="slds-form-element__label" for="name">Upload the XML file you got from site.com (Languages --> Export for translation)</label>

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
    </div>
</div>

<br>
  <div class="slds-card">
    <div class="slds-card__header slds-grid">
      <div class="slds-media slds-media--center slds-has-flexi-truncate">
        <div class="slds-media__figure">
          <svg aria-hidden="true" class="slds-icon slds-icon--small" style="fill:#54698d">
            <use xlink:href="icons/utility-sprite/svg/symbols.svg#puzzle"></use>
          </svg>
        </div>
        <div class="slds-media__body">
          <h2 class="slds-text-heading--small slds-truncate">Choose You translation JSON</h2>
        </div>
      </div>
    </div>
    <div class="slds-card__body" >
      <table class="slds-table slds-table--bordered slds-max-medium-table--stacked-horizontal ">
        <thead>
          <tr class="slds-text-heading--label">
            <th  scope="col">Select</th>
            <th  scope="col">Properties language</th>
            <th  scope="col">Content Target language</th>
            <th scope="col">See JSON</th>

          <tr>
        </thead>
<?php
foreach($jsons as $json){
  $prop=$json['properties'];
  $target=$json['language'];
  echo '  <tr class="slds-hint-parent">
        <td data-label="Select" >
          <div class="slds-form-element__control">
            <label class="slds-radio" for="baseLanguage'.$json.'">
              <input type="radio" name="baseLanguage" id="baseLanguage'.$json.'" value="'.$json['id'].'"/>
              <span class="slds-radio--faux"></span>
              <span class="slds-form-element__label"></span>
            </label>
          </div>
        </td>
        <td data-label="Properties language">'.$prop.'</td>
        <td data-label="Content Target language">'.$target.'</td>
        <td data-label="see JSON">
          <button class="slds-button" onclick="document.getElementById(\''.$json.'\').style.display=\'block\';return false;">
          <svg aria-hidden="true" class="slds-icon slds-icon--small" style="fill:#54698d">
            <use xlink:href="icons/utility-sprite/svg/symbols.svg#search"></use>
          </svg>
        </button>
        </td>
    </tr>';

}
?>
<tr class="slds-hint-parent">
      <td data-label="Select" >
        <div class="slds-form-element__control">
          <label class="slds-radio" for="baseLanguagecustom">
            <input type="radio" name="baseLanguage" id="baseLanguagecustom" value="custom"/>
            <span class="slds-radio--faux"></span>
            <span class="slds-form-element__label"></span>
          </label>
        </div>
      </td>
      <td  colspan="2">Use a Custom JSON</td>

      <td data-label="see JSON">
        <button class="slds-button" onclick="document.getElementById('custom').style.display='block';return false;" id="addlogo">
        <svg aria-hidden="true" class="slds-icon slds-icon--small" style="fill:#54698d">
          <use xlink:href="icons/utility-sprite/svg/symbols.svg#add"></use>
        </svg>
      </button>
      <button class="slds-button" onclick="document.getElementById('custom').style.display='block';return false;" id="viewlogo" style="display:none">
      <svg aria-hidden="true" class="slds-icon slds-icon--small" style="fill:#54698d">
        <use xlink:href="icons/utility-sprite/svg/symbols.svg#search"></use>
      </svg>
    </button>
      </td>
  </tr>



      </table>
    </div>
</div>




<!--
    <div class="slds-form-element">
      <label class="slds-form-element__label" for="selectSample1">What is the base language of the file?</label>
      <div class="slds-form-element__control">
        <select id="baseLanguage" name="baseLanguage" class="slds-select">
          <option>French</option>
          <option>English</option>
        </select>
      </div>
    </div>-->
    <br>
    <div class="slds-form-element">
      <input type="submit" value="Get Translated File" class="slds-button slds-button--brand"/>
    </div>

    <div id="custom" style="display:none">
      <div aria-hidden="false" role="dialog" class="slds-modal slds-fade-in-open">
        <div class="slds-modal__container">
          <div class="slds-modal__header">
            <h2 class="slds-text-heading--medium">custom JSON</h2>
            <button class="slds-button slds-button--icon-inverse slds-modal__close" onclick="document.getElementById('custom').style.display='none';return false;">
              <svg aria-hidden="true" class="slds-button__icon slds-button__icon--large">
                <use xlink:href="icons/action-sprite/svg/symbols.svg#close"></use>
              </svg>
              <span class="slds-assistive-text">Close</span>
            </button>
          </div>
          <div class="slds-modal__content">
            <div>
              <div class="slds-form-element">
                <div class="slds-form-element__control">
              <textarea  class="slds-textarea" placeholder="" rows="20" name="custom"></textarea>
              </div>
              </div>
            </div>
          </div>
          <div class="slds-modal__footer">
            <div class="slds-x-small-buttons--horizontal">
              <button class="slds-button slds-button--neutral slds-button--brand" onclick="document.getElementById('custom').style.display='none';document.getElementById('viewlogo').style.display='block';document.getElementById('addlogo').style.display='none';return false;">Continue</button>
            </div>
          </div>
        </div>
      </div>
      <div class="slds-backdrop slds-backdrop--open"></div>
    </div>



</form>
</div>


<?php

foreach($jsons as $json){
  $prop=$json['properties'];
  $target=$json['language'];
  $jsonfile=$json['json'];
  echo '  <div id="thisid'.$json['id'].'" style="display:none">
    <div aria-hidden="false" role="dialog" class="slds-modal slds-fade-in-open">
      <div class="slds-modal__container">
        <div class="slds-modal__header">
          <h2 class="slds-text-heading--medium">'.$prop.' to  '.$target.' JSON</h2>
          <button class="slds-button slds-button--icon-inverse slds-modal__close" onclick="document.getElementById(\'thisid'.$json['id'].'\').style.display=\'none\';">
            <svg aria-hidden="true" class="slds-button__icon slds-button__icon--large">
              <use xlink:href="icons/action-sprite/svg/symbols.svg#close"></use>
            </svg>
            <span class="slds-assistive-text">Close</span>
          </button>
        </div>
        <div class="slds-modal__content">
          <div>
            <div class="slds-form-element">
              <div class="slds-form-element__control">
            <textarea  class="slds-textarea" placeholder="" rows="20" >'. $jsonfile.'</textarea>
            </div>
            </div>
          </div>
        </div>
        <div class="slds-modal__footer">
          <div class="slds-x-small-buttons--horizontal">
            <button class="slds-button slds-button--neutral slds-button--brand" onclick="document.getElementById(\'thisid'.$json['id'].'\').style.display=\'none\';">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="slds-backdrop slds-backdrop--open"></div>
  </div>

  ';

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
