<html>
	<head>
		<title>show</title>
		<style type="text/css">
		<!--
			@import url("styles.css");
		-->
		</style>
	</head>


	<body>
		<h1>Student Information</h1>
		<?
		include_once("functions/database.php");
		getConnection();
		$sql="select * from users";
		$resultSet=mysql_query($sql);
		?>
	<form method="POST" action="show.html">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
      		<th width="5%" scope="col">
       		<input type="checkbox" name="checkbox" id="checkbox" class="checkall" /><label for="checkbox"></label></th>
       		<th width="18%" scope="col">Id</th>
       		<th width="16%" scope="col">Name</th>
       		<th width="29%" scope="col">Password</th>
       		<th width="13%" scope="col">remark</th>
       		<th width="11%" scope="col">Level</th>
       		<th width="8%" scope="col">Delete</th>
			</tr>
			<?php
			while($row=mysql_fetch_array($resultSet)){
			?>
	 		<tr>
        	<td scope="col"><input type="checkbox" name="checkbox5" id="checkbox5" /></td>
        	<td scope="col"><?echo $row['user_id'];?></td>
        	<td scope="col"><?echo $row['userName'];?></td>
       	 	<td scope="col"><?echo $row['password'];?></a></td>
        	<td scope="col"><?echo $row['remark'];?></td>
        	<td scope="col"><img src="images/status_online.png" alt="Online" /><img src="images/shield.png" alt="Shield" width="16" height="16" /></td>
   			<td scope="col"><a href="delete.jsp?x=<?php echo $row['user_id']?>">delete</a></td>
   		 	</tr>
			<?php
			}
			closeConnection();
			?>
		</table>
	</form>
	</body>
</html>