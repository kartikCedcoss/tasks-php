<?php
// task 1
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
 

echo  "The captal of Netherlands is ". $ceu['Netherlands']."<br>"; 
echo  "The captal of Greece is ". $ceu['Greece']."<br>";
echo  "The captal of Germany is ". $ceu['Germany'."<br>"];
echo "<br>";
?>

<?php
//task 2
$x = array(1, 2, 3, 4, 5);
 echo var_dump($x)."<br>";
 unset($x[3]);
 $x = array_values($x);
 echo var_dump($x);
 echo "<br>";
 ?>

 <?php
 //task 3
 $color = array(4 => 'white', 6 => 'green', 11=> 'red');
  echo reset($color);
  echo "<br>";

 ?>
 <?php
  //task 4
  $arr = array(1,2,3,4,5);
  foreach($arr as $newarr){
      echo $newarr;
     
  }
  echo "<br>";
  $val= "$";
  $pos= 3;
 $newarr=array_merge(array_slice($arr, 0, $pos), array($val), array_slice($arr, $pos)); 
 
 foreach($newarr as $newarray){
     echo $newarray;
     
    
 }
 
 ?>




