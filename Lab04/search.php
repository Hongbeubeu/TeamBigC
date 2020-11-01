<html>
    <head><title>Products Data</title></head>
    <style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
 <?php
 require_once 'config.php';

 $product = $_POST['product'];

$SQLcmd = "SELECT * FROM $table_name WHERE Product_desc LIKE '%{$product}%'";

if (mysqli_query( $connect, $SQLcmd)){
    $result = mysqli_query( $connect, $SQLcmd);
 print '<font size="4" color="blue" >Products Data';
 print "</font>";
print "<br>The query is $SQLcmd";
 } else {
 die ("Table Create Creation Failed SQLcmd=$SQLcmd");
 }

 if ($result->num_rows > 0) {
    echo "<table ><tr><th>Num</th><th>Product</th><th>Cost</th><th>Weight</th><th>Count</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ProductID"]. "</td><td>" . $row["Product_desc"]. "</td><td>" . $row["Cost"]. "</td><td>" . $row["Weight"]. "</td><td>" . $row["Numb"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
 ?>
</body></html>