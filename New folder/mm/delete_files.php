<?php
$name=$_FILES["file"]["name"];
$dir=$_FILES["file"]["tmp_name"];
mysql_connect("localhost","root","");
mysql_select_db("upload");
$result=mysql_query("select * from t4 where name='$name' and path='$dir'");
while($get=mysql_fetch_Array($result))
{
 if($get['name']==$name)

  {
	 
      mysql_query("delete from t4 where name='$name'");
  echo "deleted";
   }
    }
?>

 

