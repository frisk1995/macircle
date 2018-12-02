<html>
<head><title>output.php</title></head>
<body>
<?php
  $name = $_POST['name'];
  $vocal = $_POST['vocal'];
  $gtvocal = $_POST['gtvocal'];
  $lead = $_POST['lead'];
  $rhythm = $_POST['rhythm'];
  $drum = $_POST['drum'];
  $bass = $_POST['bass'];
  $key = $_POST['key'];

  print ("次のデータを受け取りました<br />");
  print ("名前：$name<br />");
  print ("パート<br />");
  if($vocal){
    print ("ボーカル<br />");
  }
  if($gtvocal){
    print ("ギターボーカル<br />");
  }
  if($lead){
    print ("リードギター<br />");
  }
  if($rhythm){
    print ("リズムギター<br />");
  }
  if($drum){
    print ("ドラム<br />");
  }
  if($bass){
    print ("ベース<br />");
  }
  if($key){
    print ("キーボード<br />");
  }
?>
</body>
</html>
