<html>

<head>
<script>
var a=31;
var i;
for (i=0;i<=a;i++){
document.getElementsByClassName("date").innerHTML = "<option value="i">" + i + "</option>";
} 

</script>
</head>
<body>
<form>
<select name="date">


</select>

</form>
<?php
$a = 31;
for ($i=0;$i <= $a; $i++){
echo $i ;
} 
echo"<br>";
$startdate=strtotime("feb");
$enddate=strtotime("+11 month", $startdate);

while ($startdate <= $enddate) {
  echo date("M", $startdate) . "<br>";
  $startdate = strtotime("+1 month", $startdate);
}
echo"<br>";
$startdate=strtotime("december");
$enddate=strtotime("+11 month", $startdate);

while ($startdate < $enddate) {
  echo date("M", $startdate) . "<br>";
  $startdate = strtotime("+1 month", $startdate);
}
?>

</body>
</html>