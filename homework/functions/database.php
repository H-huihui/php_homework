<?php 
$databaseConnection = null;
function getConnection(){
	$hostname = "127.0.0.1:3306"; //���ݿ������������,������IP����
	$database = "test"; //���ݿ���
	$userName = "root"; //���ݿ�������û���
	$password = ""; //���ݿ����������
	global $databaseConnection;
	$databaseConnection = @mysql_connect($hostname, $userName, $password) or die(mysql_error()); //�������ݿ������
	mysql_query("set names 'gbk'");//�����ַ���
	@mysql_select_db($database, $databaseConnection) or die(mysql_error());

}
function closeConnection(){
	global $databaseConnection;
	if($databaseConnection){
		mysql_close($databaseConnection) or die(mysql_error());
	}
}
?>
