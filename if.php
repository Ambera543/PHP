<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$isMale =true;
$isTall = false;
if ($isMale && $isTall){
  echo "You are tall male";
} elseif($isMale && !$isTall){
  echo "You are short male";
} elseif (!$ismale && $isTall){
  echo "You are tall female"
}
else{
  echo "You are short female";
}
 ?>
  </body>
</html>
