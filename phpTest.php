<?php

$first_Num = readline('input first num ');
$second_Num = readline('input second num ');

while ($first_Num != 0 and $second_Num != 0){

   if ($first_Num > 100 or $second_Num >100){
      echo 'do it again' . "\n";
   }

   else{
      $answer = $first_Num * $second_Num;
      echo $answer . "\n";
   }

   $first_Num = readline('input first num ');
   $second_Num = readline('input second num ');

}

?>


