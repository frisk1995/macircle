$sql = "SELECT * FROM cities";

// SQL�X�e�[�g�����g�����s���A���ʂ�ϐ��Ɋi�[
$stmt = $dbh->query($sql);

// foreach���Ŕz��̒��g����s���o��
foreach ($stmt as $row) {

// �f�[�^�x�[�X�̃t�B�[���h���ŏo��
	echo $row['name'].'�F'.$row['population'].'�l';
 
// ���s������
	echo '<br>';
}}

