<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form  action="site2.php" method="get">
  <input type="number" name="num1" value="">
  <br>
  <input type="number" name="num2" value="">
  <input type="submit" name="" value="">

</form>
Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
  </body>
</html>
