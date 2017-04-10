<?php
  $clr = array('white','green','red','blue','black');
  echo "The " .$clr[0].  "carpet";
  echo "The" .$clr[1]. "lawn";
  echo "The" .$clr[2]. "house";
  echo "The" .$clr[3]. "sky";


  $clr = array('white', 'green', 'red');
  sort($clr);
  echo $clr;


  3.$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
  sort($clr);
  foreach($ceu as $x => $x_value) {
    echo "the capital of" . $x . ", is" . $x_value;
    echo "<br>";
  }

  $clr = array(4 => 'white', 6 => 'green', 11=> 'red');
  $clr as  $x => $x_value;
  echo $x_value[0];

















 ?>
