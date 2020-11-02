<html>
    <head>
        <title>Business Registration</title>
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
 <?php
 require_once 'config.php';

 $table_name = "BUSINESSES";
 $table_name2 = "Categories";
 $table_name3 = "Biz_Categories";
 ?>
 <font size="6" color="black" >Business Registration</font>
 <?php
    $SQLcmd2 = "SELECT category_id,title FROM $table_name2";
    if (mysqli_query( $connect, $SQLcmd2)){
        $result2 = mysqli_query( $connect, $SQLcmd2);
?>
 <div class="flex-container">
 <div >
    <p>Click on one, or control-click on multiple categories:</p>
    <form action="add_biz.php" method="post">
    <select name="categoris[]" multiple>
    <?php
       
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
    ?>
    <option value ="<?php echo $row["category_id"];?>"><?php echo $row["title"];?></option>
    <?php
            }
        }
    ?>
    </select>
 </div>
<?php
     } else {
     die ("Select faild SQLcmd=$SQLcmd2");
     }
 ?>
 <div >
        <p><label for="businessName">Business Name:</label>
        <input type="text" name="businessName" /><br/></p>
        <p><label for="address">Address:</label>
        <input type="text" name="address" /><br/></p>
        <p><label for="city">City:</label>
        <input type="text" name="city" /><br/></p>
        <p><label for="telephone">Telephone:</label>
        <input type="text" name="telephone" /><br/></p>
        <p><label for="url">URL:</label>
        <input type="text" name="url" /><br/></p>
   
</div>
</div>
<button type="submit" name="submit">
    <?php 
    if(isset($_POST["submit"])){
    ?>
        <font>Add Another Business</font>
    <?php
    } else {
    ?>
        <font>Add Business</font>
    <?php
    }
    ?>
</button>
</form>
<?php
if(isset($_POST["submit"])){
    if(empty($_POST['businessName'])||empty($_POST['address'])||empty($_POST['city'])||empty($_POST['telephone'])||empty($_POST['url'])||empty($_POST['categoris'])){
        echo "<br><font size='4' color='red'>You have not entered enough information</font>";
    }else{
    
        $businessName = $_POST['businessName'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $telephone = $_POST['telephone'];
        $url = $_POST['url'];
    
        $SQLcmd = "INSERT INTO $table_name (name,address,city,telephone,url) VALUES ('$businessName','$address','$city',$telephone,'$url')";
        if (mysqli_query( $connect, $SQLcmd)){
    
             $business_id = mysqli_insert_id($connect);
    
             foreach($_POST['categoris'] as $selectedOption){
                $SQLcmd3 = "INSERT INTO $table_name3 (category_id,business_id) VALUES ($selectedOption,$business_id)";
                if (mysqli_query( $connect, $SQLcmd)){
                       echo "<br>Add " . $selectedOption . " business successed ";
                } else {
                echo "Error: " . $SQLcmd3 . "<br>" . mysqli_error($connect);
                }
            }
         } else {
         echo "Error: " . $SQLcmd . "<br>" . mysqli_error($connect);
         }
    }
}
?>
</body></html>