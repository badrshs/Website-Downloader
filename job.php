<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
 //if($_POST['password']=="123") //there is hidden input with password name if you want to use it uncomment this
if(isset($_POST['link'])){
	$URL = $_POST['link'];
	
 
  $zip =parse_url($_POST['link'])['host'];
 
  
	$cmd = " wget -r -p -e robots=off -U mozilla  $URL -P ./$zip   ";
exec($cmd);

$cmd = " zip -r $zip.zip  $zip   ";

exec($cmd);

$cmd = "rm -rf $zip";
exec($cmd);

$Filename = "$zip.zip";
$attachment_location=$Filename;

if (file_exists($attachment_location)) {
 header('location:'.'http://'.$_SERVER['HTTP_HOST'].'/'.$Filename);
 
 
     die();
} else {
    die("Error: File not found.");
}

}

?>