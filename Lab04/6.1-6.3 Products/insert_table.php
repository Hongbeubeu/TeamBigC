<html><head><title>Insert Table</title></head><body>

 <?php
 require_once 'config.php';
 $numberAvailable = $_POST['numberAvailable'];
 $cost = $_POST['cost'];
 $weight = $_POST['weight'];
 $itemDescription = $_POST['itemDescription'];
//  echo "Hi " . $numberAvailable . "!<br/>";
$sql = "INSERT INTO Products (Product_desc, Cost, Weight, Numb)
VALUES ('$itemDescription', $cost , $weight, $numberAvailable)";
if (mysqli_query($connect, $sql)) {
    echo "The query is .$sql . <br>";
    echo "Insert into Products was successful ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }
 mysqli_close($connect);
 ?>

</body></html>