<?php
session_start();

$ext = substr(__FILE__, strrpos(__FILE__, ".") + 1);

require dirname(__FILE__)."/config.$ext";

$s_dbid = FALSE;




$username = $_SESSION['username'];

if($username == ''){
 echo  ' <meta http-equiv="refresh" content="0;url=index.php">';
}



   function symp_connect() {
      global $s_dbhost, $s_dbuser, $s_dbpass, $s_dbname,$s_dbid;

         $s_dbid = @mysqli_connect($s_dbhost, $s_dbuser, $s_dbpass,$s_dbname);

         
   }

    function symp_disconnect() {
      global $s_dbid;

         mysqli_close($s_dbid);
         $s_dbid = FALSE;
   }
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profile_image"]["name"]);	

	symp_connect();



$detailsql = "select id from `join` WHERE `username` = '$username' ;"; 
$detailresult = mysqli_query($s_dbid,$detailsql);
list($mid) = mysqli_fetch_row($detailresult);

move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);
$fname = basename( $_FILES["profile_image"]["name"]);




    $detailsql = "UPDATE `join` SET `profile_image` = '$fname' WHERE `id` = '$mid' ;"; 
$detailresult = mysqli_query($s_dbid,$detailsql);





header("Location: id-card.php?msg=Profile Image Uploaded successfully.");




  
symp_disconnect();

?>