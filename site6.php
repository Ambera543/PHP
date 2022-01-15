<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="site6.php" method="post">
      <input type="text" name="student">
      <input type="submit">

    </form>
    <?php
    $grade = array("Jim" => "A+", "Pam" => "B-", "Oscar" =>"C+" );
// $grade["Jim"] = "F";
    // echo $grade["Jim"];
    echo $grade[$_POST["student"]];
    ?>
  </body>
</html>
