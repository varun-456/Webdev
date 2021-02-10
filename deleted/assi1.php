<?php
function isbitten($num)
{
   if($num >50)
      echo "Charlie bite Your Finger";
   else
      echo "Charlie Did not bite Your Finger";
}
isbitten(rand(1,100));
?>