<?php
  $tag=$_POST['tag'];
 // $logo=$_POST['logo'];
 $size=$_FILES["file"]["size"];
     if(!($tag==NULL))
     {
        $size=$size/111024;
      mkdir("uploaded/".$tag,0700);
      $loc="uploaded/".$tag."/".$_FILES["file"]["name"];

      //echo $size.$loc.$tag;
      move_uploaded_file($_FILES["file"]["tmp_name"], "uploaded/" .$tag."/". $_FILES["file"]["name"]);
	  
	  $name=$_FILES["file"]["name"];
	  $dir=$_FILES["file"]["tmp_name"];
	  mysql_connect("localhost","root","");
mysql_select_db("upload");
$tab= "
CREATE TABLE up.$u (
  name TEXT,
  path	TEXT,
  upload INTEGER
)
ENGINE = MyISAM
CHARACTER SET utf8 COLLATE utf8_persian_ci; "  ;
mysql_query($tab);
mysql_query("insert into t4  set name='$name',path='$dir'");

     }
?>