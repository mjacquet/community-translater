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
<form enctype="multipart/form-data" action="filetojson.php" method="POST" class="slds-form--stacked">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <? if (empty($_FILES)) echo'
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
      <input type="submit" value="Get JSON file" class="slds-button slds-button--brand"/>
    </div>


  </div>';
  else{
    $xml=simplexml_load_file($_FILES['thefile']['tmp_name']) or die("Error: Cannot create object");
    foreach ($xml->xpath('//component') as $component) {
    	$context='';
    	//foreach($component->attributes() as $a => $b){
    	//	if($a=="context")$context=(String)$b;
    	//}
    	foreach($component->field as $field){
    		if((String)$field->attributes()->name=="HTML")
            if(!isset($result[(String)$field->attributes()->exportcrc]['HTML']))
                $result[(String)$field->attributes()->exportcrc]['HTML']=(string)$field;
        if(count($field->property)==0){
      			if(!isset($result[(String)$component->attributes()->context][(String)$field->attributes()->name]))
      			$result[(String)$component->attributes()->context][(String)$field->attributes()->name]=(string)$field;
        }
        else{
        foreach($field->property as $property){
    			if(!isset($result[(String)$component->attributes()->context][(String)$property->attributes()->name]))
    			$result[(String)$component->attributes()->context][(String)$property->attributes()->name]=(string)$property;
    		}
        }

    	}
    }


    $json=json_encode($result,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    echo'<div class="slds-form-element">
      <label class="slds-form-element__label" for="sample2">JSON Ready to translate!</label>
      <div class="slds-form-element__control">
    <textarea id="frtofr" class="slds-textarea" placeholder="" rows="20">'.$json.'</textarea>
    </div>
    </div>';
  }
  ?>


</form>
</div>
</body>
</html>
