<?php
header('Content-Type: text/html; charset=utf-8');


if (!empty($_FILES))
{
  $xml=simplexml_load_file($_FILES['thefile']['tmp_name']) or die("Error: Cannot create object");
}
else die('you need to supply a file');
$dsn = 'pgsql:dbname=dcchj8eabfgcpk;host=ec2-54-217-238-100.eu-west-1.compute.amazonaws.com;user=cpdwgioaplythe;port=5432;password=VVsW-j66_i_JW5pSDOc_ACV6S_';
try
{
  $db = new PDO($dsn);
}
catch(PDOException $pe)
{
  die('Connection error, because: ' .$pe->getMessage());
}


if(isset($_POST['baseLanguage']) && $_POST['baseLanguage']!="custom"){
  $query = "SELECT * FROM translations WHERE id='".$_POST['baseLanguage']."'";
  $transl = $db->query($query)->fetchAll();
  $trans=json_decode($transl[0]['json'],true);
}
elseif(isset($_POST['baseLanguage']) && $_POST['baseLanguage']=="custom")$trans=json_decode($_POST['custom'],true);

if($trans==null)die("FATAL ERROR: decoding JSON failed.");

//print_r($trans);

$result=array();
// change content

foreach ($xml->xpath('//component') as $key => $component) {
 $f=0;
	foreach($component->field as $field){
		if((String)$field->attributes()->name=="HTML"){
			$xml->component[$key]->field= new SimpleXMLElement("<field name=\"HTML\" language=\"".(String)$field->attributes()->language."\" exportcrc=\"".(String)$field->attributes()->exportcrc."\"><![CDATA[".$trans[(string)$field->attributes()->exportcrc]['HTML']."]]></field>");
			}




      if(count($field->property)==0){
          if(isset($trans[(String)$component->attributes()->context][(String)$field->attributes()->name]))
            $xml->component[$key]->field[$f]=new SimpleXMLElement("<field name=\"".(String)$field->attributes()->name."\" language=\"".(String)$field->attributes()->language."\" exportcrc=\"".(String)$field->attributes()->exportcrc."\"><![CDATA[".$trans[(string)$component->attributes()->context][(string)$field->attributes()->name]."]]></field>");
      }
      else{
          $i=0;
      		foreach($field->property as $property){

      			if(isset($trans[(string)$component->attributes()->context][(string)$property->attributes()->name])){
      				if(count($xml->component[$key]->field->property)>1){
      									$xml->component[$key]->field->property[$i]= new SimpleXMLElement("<property  name=\"".(string)$property->attributes()->name."\"><![CDATA[".$trans[(string)$component->attributes()->context][(string)$property->attributes()->name]."]]></property>");
      			}
      				else {
      					$xml->component[$key]->field->property= new SimpleXMLElement("<property name=\"".(string)$property->attributes()->name."\"><![CDATA[".$trans[(string)$component->attributes()->context][(string)$property->attributes()->name]."]]></property>");
      					}
      				}
      		$i++;
      		}
      }
      $f++;
	}
}
header('Content-disposition: attachment; filename=translated.xml');
header('Content-type: text/xml');
echo $xml->asXml();


?>
