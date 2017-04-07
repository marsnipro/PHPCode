<!DOCTYPE html>
<html>
<body>
  
<h1>My first PHP page</h1>
  
<?php
echo "The time is " . date("h:i:sa")."<br>"; 
header("Refresh:3");

?>  
  
<?php
echo "My first PHP script!<br>"; 
?>
  
<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

</body>
</html>
