<?php
$n=$_POST['name'];
$f=$_POST['family'];
$e=$_POST['email'];
$u=$_POST['user'];
$p=$_POST['pass'];
mysql_connect("localhost","root","");
mysql_select_db("login");
$tb= "
CREATE TABLE info.$u (
  name TEXT,
  family TEXT,
  email TEXT,
  user TEXT,
  pass TEXT,
  upload INTEGER
)
ENGINE = MyISAM
CHARACTER SET utf8 COLLATE utf8_persian_ci;
"  ;
mysql_query($tb);
mysql_query("insert into t2  set name='$n',family='$f',email='$e',user='$u',pass='$p'");

$name=$_POST['name'];
$pass=$_POST['pass'];


$mail_to=$_POST['email'];
$mail_from="sadegh.m11@gmail.com";
$mail_subject="Welcome";
$mail_body="Welcome".$u."to our Site";
$mail_headers="FROM:".$mail_from;
@mail($mail_to,$mail_subject,$mail_body,$mail_headers);

    ini_set("SMTP","smtp.gmail.com");
    ini_set("smtp_port","587");
    ini_set("sendmail_from","sadegh.m11@gmail.com");
echo ("Successfully sent an email to your mail!");

?>
<?php echo "Welcome".$user;?>
 <script>
 		window.location="http://localhost/mm/index1.html"
 </script>
  

