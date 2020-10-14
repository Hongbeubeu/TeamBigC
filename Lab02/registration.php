<HTML>
<HEAD><TITLE>Trang chủ</TITLE>
<meta charset="utf-8" />
<link rel="stylesheet" href="trangchu.css">
</HEAD>
<Body>
<div class="alert success">
  <?php 
    echo "Hello, " . $_POST['name']."<br/>";
    echo "You are studying at class: " . $_POST['class'] . ", University: ". $_POST['university']."<br/>";
    echo "Your hobby is". "<br/>";
    
    $counter = 1;
    if(isset($_POST['hobby'])){
      $hobbies = $_POST['hobby'];
      foreach($hobbies as $hobby){
          echo $counter . ". " . $hobby . "<br/>";
          $counter++;
      }
    }
    if(!empty($_POST['hobbies']))
        echo $counter . ". " . $_POST['hobbies'];
  ?> 
</div>
<div>
</div>
</body>
</HTML>