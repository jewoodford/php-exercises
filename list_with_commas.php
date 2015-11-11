<?php

 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
 	sort($array);
   $lastItem = array_pop($array);
   $humanLastItem = 'and ' . $lastItem;
   array_push($array, $humanLastItem);
   $physicistList = implode(', ', $array);
   return $physicistList;
 }

 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 $physicistsArray = explode(', ', $physicistsString);


 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

 ?>