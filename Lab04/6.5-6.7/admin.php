<html><head><title>Categories Admin</title>
<link rel="stylesheet" href="styles.css">
</head><body>
<?php 
 require_once 'config.php';
 if(isset($_POST['submit']))
{
    $category_id = $_POST['category_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
   $sql = "INSERT INTO Categories (category_id, title, description)
   VALUES ('$category_id', '$title' , '$description')";
   if (mysqli_query($connect, $sql)) {
       echo "The query is .$sql . <br>";
       echo "Insert into Products was successful ";
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($connect);
     }
} 
$sql = "SELECT * FROM Categories";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo '<h1>Category Administration</h1>' ;
  echo '<form method="POST" id="add_category" action="admin.php"></form>';
    echo '<table>';
    echo '<tr>
    <th>Category id</th>
    <th>Title </th>
    <th>Description</th>
  </tr>';
  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
      <td> ". $row["category_id"]."</td>
      <td> ". $row["title"]."</td>
      <td> ". $row["description"]."</td>
    </tr>";
  }
};
echo "<tr>
    <td>  <input type='text' name='category_id' form='add_category' /></td>
    <td>  <input type='text' name='title' form='add_category' /></td>
    <td>  <input type='text' name='description' form='add_category' /></td>
</tr>";
echo '</table> ';
echo ' <input type="submit" value="Add category" name="submit" form="add_category">';
mysqli_close($connect);
?>