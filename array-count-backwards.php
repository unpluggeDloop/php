<?php
//count elements of an array array_a backwards and add it to new array array_b
$array_a = [1,2,3];
$array_b= [];

for($i=count($array_a)-1; $i>=0; $i--){
  $array_b[]=$array_a[$i];
}

echo "<pre>";
print_r($array_b);
echo "</pre>";
