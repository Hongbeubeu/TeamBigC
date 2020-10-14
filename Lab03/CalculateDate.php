<html>
<head><title>Kết quả</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="caculate.css">
</head>
<body>
    <div> 
<?php
    $input_date = strtotime($_POST['date']);
    $input_time = strtotime($_POST['time']);
    $numberOfMonth;
    $name = $_POST['name'];
    echo "Hi " . $name . "!<br/>";
    echo "You have choose to have an appointment on " . date('H:i:s', $input_time). ", ". date('d/m/yy', $input_date) . "<br/><br/>";
    echo "More information<br/><br/>";
    echo "In 12 hours, the time and date is " .  date('h:i:s A',$input_time) . ", " .  date('d/m/yy', $input_date) . "<br/><br/>";
    $year = date('y', $input_date);
    $month = date('m', $input_date);
    $date = date('d', $input_date);

    if($month == 2){
        $numberOfMonth = 28;
        if($year % 400 == 0){
            $numberOfMonth = 29;
        }
        
        if($year % 4 == 0 && $year % 100 != 0){
            $numberOfMonth = 29;
        }
    }
    else {
        switch ($month) {
            case 1:
                $numberOfMonth = 31;
                break;
            case 3:
                $numberOfMonth = 31;
                break;
            case 5:
                $numberOfMonth = 31;
                break;
            case 7:
                $numberOfMonth = 31;
                break;
            case 8:
                $numberOfMonth = 31;
                break;
            case 10:
                $numberOfMonth = 31;
                break;
            case 12:
                $numberOfMonth = 31;
                break;
            default:
                $numberOfMonth = 30;
                break;
        }
    }
    echo "This month has " . $numberOfMonth . " days!";
?>
</div>
</body>
</html>