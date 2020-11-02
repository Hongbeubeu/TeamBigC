<html><head><title>query</title>
<link rel="stylesheet" href="styles.css">
</head><body>
<?php 
 require_once 'config.php';
$sql = "SELECT * FROM Products";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo '<p  style= "font-size: 24px; color: blue">Products Data </p>' ;
  echo '<p>The query is ' .$sql. '</p>';
    echo '<table>';
    echo '<tr>
    <th>Num</th>
    <th>Product</th>
    <th>Cost</th>
    <th>Weight</th>
    <th>Count</th>
  </tr>';
  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
      <td> ". $row["Numb"]."</td>
      <td> ". $row["Product_desc"]."</td>
      <td> ". $row["Cost"]."</td>
      <td> ". $row["Weight"]."</td>
      <td> ". $row["ProductID"]."</td>
    </tr>";
  }
} else {
  echo "0 results";
};
echo '</table> ';
mysqli_close($connect);
?>