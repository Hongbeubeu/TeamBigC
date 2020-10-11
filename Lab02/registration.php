<HTML>
<HEAD><TITLE>Trang chủ</TITLE>
<meta charset="utf-8" />
<link rel="stylesheet" href="trangchu.css">
</HEAD>
<Body>
<div class="alert success">
  <strong>Xin chào!</strong>
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
        echo $counter . ". " . $_POST['hobbies'];
    }
  ?> 
</div>
<div>
</div>
</body>
</HTML>