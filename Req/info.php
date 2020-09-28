<!DOCTYPE html>
<html>
<body>

<form action="info.php" method="POST">
  <?php include "index.html" ?>



  <? echo $_POST["first"]; ?>
  <br>
  <? echo $_POST["last"]; ?>
  <br>
  <? echo $_POST["email"]; ?>
  <br>
  <? echo $_POST["telephone"]; ?>
  <br>
  <?php $grade = $_POST["grade"]; ?>
  <? echo $grade[0]; ?>

</body>
</html>
