<?php
header("Content-Type:text/html; charset=utf-8");
echo "<head>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
echo "</head>";

class PostOffice{

    function mailFiler(){
        $myfile = fopen("string.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("string.txt"));
		fclose($myfile);
    }
    function mailRegex(){
     	$myfile2 = fopen("string.txt", "r") or die("Unable to open file!");
  //   	while(fgetc($myfile2)){
		//   echo fgetc($myfile2);
		// }
     	while('fgetc($myfile2)'=='[a-zA-Z0-9]'){
		   echo fgetc($myfile2);
		}
		fclose($myfile2);
    }	
    function spiltroad(){
        $myfile = fopen("string.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("string.txt"));
		fclose($myfile);
    }
}

$PostOffice = new PostOffice;
$PostOffice->mailFiler();
echo "<br/>";
$PostOffice = new PostOffice;
$PostOffice->mailRegex();
echo "<br/>";
 $PostOffice = new PostOffice;
 $PostOffice->spiltroad();

?>