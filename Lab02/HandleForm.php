<?php
    echo "Hello, ".$_POST['name']."<br/>";
    echo "You are studying at " . $_POST['class'] . ", ". $_POST['university']."<br/>";
    echo "Your hobby is". "<br/>";
    $hobbies = $_POST['hobby'];
    if(empty($hobbies)){
        echo "No hobby"."<br/>";
    }else{
        $counter = 1;
        foreach($hobbies as $hobby){
            echo $counter . "." . $hobby . "<br/>";
            $counter++;
        }
    }
?>