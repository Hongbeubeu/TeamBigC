<html>
    <head><title>Business Registration</title></head>
    <style>
    table, th, td {
        border: 1px solid black;
    }
    .flex-container {
        display: flex;
    }
</style>
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
 <div>
    <p>Click on one, or control-click on multiple categories:</p>
    <form action="add_biz.php" method="post">
    <select name="categoris" multiple>
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
 <div>
        <label for="businessName">Business Name:</label>
        <input type="text" name="businessName" /><br/>
        <label for="address">Address:</label>
        <input type="text" name="address" /><br/>
        <label for="city">City:</label>
        <input type="text" name="city" /><br/>
        <label for="telephone">Telephone:</label>
        <input type="text" name="telephone" /><br/>
        <label for="url">URL:</l    abel>
        <input type="text" name="url" /><br/>
        
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
</div>
</div>

<?php

if(empty($_POST['businessName'])||empty($_POST['address'])||empty($_POST['city'])||empty($_POST['telephone'])||empty($_POST['url'])){
    echo "";
}else{

    $businessName = $_POST['businessName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $telephone = $_POST['telephone'];
    $url = $_POST['url'];

    $SQLcmd = "INSERT INTO $table_name (name,address,city,telephone,url) VALUES ('$businessName','$address','$city',$telephone,'$url')";
    // $array = $result2->fetch_assoc();
    // foreach($array as $value){
    //     if($value == $array["category_id"]);
    //     $SQLcmd3 = "INSERT INTO $table_name3 (category_id,business_id) VALUES ($value)";
    // }

    $SQLcmd3 = "INSERT INTO $table_name3 (category_id,business_id) VALUES ($_POST('categories')";
    if (mysqli_query( $connect, $SQLcmd)){
        
        $result = mysqli_query( $connect, $SQLcmd);
        //$roww = $result->fetch_assoc();

        echo mysqli_insert_id($connect);
    print "<br>The query is $SQLcmd";
     } else {
     echo "Error: " . $SQLcmd . "<br>" . mysqli_error($connect);
     }
}
?>
</body></html>