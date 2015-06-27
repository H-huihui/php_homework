<?php
  include_once("functions/database.php");
  getConnection();
  $sql="show databases";
  $resultSet=mysql_query($sql);
  while($row=mysql_fetch_array($resultSet)){
    echo $row['Database'];
    echo "<br/>";
  }
  $sql="use test";
  mysql_query($sql);
  $sql="show tables";
  $result=mysql_query($sql);
  if(!$result){
    while($testSet=mysql_fetch_row($result)){
      echo $testSet['id'];
    }
  }else{
    echo "the result is null";
  }
// some code
  $sql="create table user(id int,name varchar(20), password varchar(30))";
  mysql_query($sql);

  $sql="insert into user values(12,'hh','hh')";
  mysql_query($sql);
  $sql="select * from user";
  $resultSet=mysql_query($sql);
  while($row=mysql_fetch_array($resultSet)){
    echo $row['id'];
    echo "<br/>";
  }

?>