<?php
include_once("functions/database.php");
//�ռ����ύ����
$userName = $_POST['userName'];
$password = $_POST['password'];
//�������ݿ������
getConnection();
//�ж��û����������Ƿ�������ȷ
$sql = "select * from users where userName='$userName' and password='$password'";
$resultSet = mysql_query($sql);
if(mysql_num_rows($resultSet)>0){
	header("Location:show.php");
}else{
	echo "�û���������������󣡵�¼ʧ�ܣ�";
}
closeConnection();
?>
