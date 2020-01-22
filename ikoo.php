<?php
$iko[100]=0;
 for ($i=0; $i<=99; $i++)
 {
$iko[$i]+=$i;
     //if($i\2==4) echo $iko[i];
 //echo " ";
//echo '<br>';
}
for ($i=0; $i<=99; $i++)
 {
//$iko[i]+=i;
     if($iko[$i]/2==4)
      echo $iko[$i];
 //echo " ";
//echo '<br>';
}