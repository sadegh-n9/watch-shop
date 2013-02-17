<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$ad="admin";
 if($ad===$user)
 	 if($ad===$pass)
	 echo "Welcome Admin ";
	 ?>
	  <script>
 		window.location="http://localhost/mm/index1.html"
 </script>
 <?php
//echo $user.$pass;
mysql_connect("localhost","root","");
mysql_select_db("login");
$result=mysql_query("select * from t2 where user='$user' and pass='$pass'");
while($get=mysql_fetch_Array($result))
{
	
	 if($get['user']==$user)$i++;
 if($get['pass']==$pass)$i++;
}
  if($i<2)echo "نام كاربري يا پسورد اشتباه است" ;
  if($i>1)
  {
  echo "ok";
  
  ?>
 
<?php echo "Welcome".$user;?>
 <script>
 		window.location="http://localhost/mm/index1.html"
 </script>
  <?php
  }

?>
