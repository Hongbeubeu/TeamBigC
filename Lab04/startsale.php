<html>
<head><title>Start Sale</title></head>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
    <?php
        require_once 'config.php';

        $SQLcmd = "SELECT * FROM $table_name";
        $SQLcmd2 = "SELECT * FROM $table_name ORDER BY ProductID DESC";

        if (mysqli_query( $connect, $SQLcmd)){
            $result = mysqli_query( $connect, $SQLcmd);
            print '<font size="4" color="blue" >Select Product We Just Sold: ';
            print "</font>";
    ?>
    <form method="post" action="sale.php">
        <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
        ?>
                <?php echo $row["Product_desc"];?>
                <input type="radio" value="<?php echo $row["Product_desc"];?>"  name="myRadio"> 
        <?php
            }
        ?>
        <br/>
        <button type="submit" name="submit">Click to submit</button>
        <button type="reset" name="submit">Reset</button>
    </form>
    <?php
        print "<br>The query is $SQLcmd";
        } else {
        die ("Table Create Creation Failed SQLcmd=$SQLcmd");
        }
        $result2 = mysqli_query( $connect, $SQLcmd2);
        if ($result2->num_rows > 0) {
    ?>
    <table >
        <tr>
            <th>Num</th>
            <th>Product</th>
            <th>Cost</th>
            <th>Weight</th>
            <th>Count</th>
        </tr>
        <?php
            while($row = $result2->fetch_assoc()) {
                echo "<tr><td>" . $row["ProductID"]. "</td><td>" . $row["Product_desc"]. "</td><td>" . $row["Cost"]. "</td><td>" . $row["Weight"]. "</td><td>" . $row["Numb"]. "</td></tr>";
            }
        ?>
    </table>
    <?php
        } else {
            echo "0 results";
        }
        }
    ?>

</body>
</html>