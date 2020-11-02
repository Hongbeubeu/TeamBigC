<html>
    <head><title>Sale</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
        require_once 'config.php';

        $radioVal = $_POST["myRadio"];

        $SQLcmd = "UPDATE $table_name SET Numb=Numb-1 WHERE Product_desc LIKE '{$radioVal}'";
        $SQLcmd2 = "SELECT * FROM $table_name ORDER BY ProductID DESC";
        if (mysqli_query( $connect, $SQLcmd)){
            print '<font size="4" color="blue" >Update Results for Table Products';
            print "</font>";
            print "<br>The query is $SQLcmd";
        } else {
            die ("Table Update Failed SQLcmd=$SQLcmd");
        }

        $result = mysqli_query( $connect, $SQLcmd2);
        if ($result->num_rows > 0) {
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
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["ProductID"]. "</td><td>" . $row["Product_desc"]. "</td><td>" . $row["Cost"]. "</td><td>" . $row["Weight"]. "</td><td>" . $row["Numb"]. "</td></tr>";
            }
        ?>
    </table>
    <?php
        } else {
            echo "0 results";
        }
    ?>
</body>
</html>