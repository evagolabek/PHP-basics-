<?php
//people array @todo get from DB
$people[] = "Joe";
$people[] = "Anna";
$people[] = "Gregg";
$people[] = "Steve";
$people[] = "Maria";
$people[] = "Barbara";
$people[] = "Clair";
$people[] = "Danny";
$people[] = "Eva";
$people[] = "Henry";
$people[] = "Ken";
$people[] = "Lisa";
$people[] = "Oscar";
$people[] = "Zoe";
$people[] = "Patrick";
$people[] = "Rob";
$people[] = "Tom";
$people[] = "Walter";
$people[] = "Jack";


//get Query string
$q = $_REQUEST['q'];

$suggestion = "";

//get suggestions

if($q !== ""){
  $q = strtolower($q);
  $len = strlen($q);
  foreach($people as $person){
    if(stristr($q, substr($person, 0, $len))){
      if($suggestion === ""){
        $suggestion = $person;
      } else {
        $suggestion .= ". $person";
      }
    }
  }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;
