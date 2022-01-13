<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


     <form class="" action="site.php" method="get">
       Name: <input type="text" name="username" value="">
       <br>
       Age: <input type="number" name="age" value="">
<input type="submit" name="" value="">
     </form>
     <br>
     Your name is: <?php echo $_GET["username"] ?>
     <br>
     Your age is: <?php echo $_GET["age"] ?>
  </body>
</html>
