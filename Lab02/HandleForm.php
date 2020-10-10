<?php
    echo "Hello, ".$_POST['name']."<br/>";
    echo "You are studying at " . $_POST['class'] . ", ". $_POST['university']."<br/>";
    echo "Your hobby is". "<br/>";
    $hobbies = $_POST['hobby'];
    $counter = 1;
    if(empty($hobbies)){
        echo "No hobby"."<br/>";
    }else{
        foreach($hobbies as $hobby){
            echo $counter . ". " . $hobby . "<br/>";
            $counter++;
        }
    }
    echo $counter . ". " . $_POST['otherHobby']."<br/>";
?>