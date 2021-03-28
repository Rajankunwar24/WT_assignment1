<!DOCTYPE html>
<html>
<body>

<?php
$name = array("Rajan", "Kunwar", "qwe");
sort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$name = array("Rajan", "Kunwar", "qwe");
rsort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$age = array("Rajan"=>"35", "Kunwar"=>"40", "qwe"=>"20");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Rajan"=>"35", "Kunwar"=>"40", "qwe"=>"20");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Rajan"=>"35", "Kunwar"=>"40", "qwe"=>"20");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php"Rajan"=>"35", "Kunwar"=>"40", "qwe"=>"20");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
</body>
</html>