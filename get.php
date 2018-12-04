$sql = "SELECT * FROM cities";

// SQLステートメントを実行し、結果を変数に格納
$stmt = $dbh->query($sql);

// foreach文で配列の中身を一行ずつ出力
foreach ($stmt as $row) {

// データベースのフィールド名で出力
	echo $row['name'].'：'.$row['population'].'人';
 
// 改行を入れる
	echo '<br>';
}}

