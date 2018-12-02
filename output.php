<html>
<head><title>output.php</title></head>
<body>
<?php
  $name = $_POST['name'];
  $vocal = $_POST['vocal'];
  $vocal = $_POST['gtvocal'];
  $lead = $_POST['lead'];
  $rhythm = $_POST['rhythm'];
  $drum = $_POST['drum'];
  $bass = $_POST['bass'];

  print ("次のデータを受け取りました<br />");
  print ("名前：$name<br />");
?>
</body>
</html>
