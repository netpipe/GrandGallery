<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="Keywords" content="keywords" /><meta name="Description" content="so much fun you'll forget to..." />
<!--ZOOMRESTART-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="refresh" content="30">
<style type="text/css" media="screen, projection">
@import "style.css";
</style>
<title>Welcome To TFS.</title></head>

<body style="background:#414141">

 <div id="wrapper">

  <div id="body">

	 <div align="center" style="border:2px black solid;background: url('31.png');height:100%;width:100%;background:white;">
	<img src="31.png" width="500px" />
	</div>

	<div>
	 <ul id="TJK_dropDownMenu">
		<li id="AB" style="background:#616C7A ; width:12% "><a href="default.asp">Menu</a>
  		 <ul>
			<li><a href="./index.php">Home</a></li>
			<li><a href="./contact.php">Contact</a></li>
		 </ul>
		</li>
		<li id="CF" style="background:#5C6776 ; width:12% " ><a href="forums.php">Forums</a>	</li>
        <li id="3m" style="background:#546070 ; width:12% "><a href="forums.php"> </a>	</li>
        <li id="3m" style="background:#4A5568 ; width:12% "><a href="forums.php"> </a>	</li>
        <li id="3m" style="background:#3A455B ; width:12% "><a href="forums.php"> </a>	</li>
        <li id="3m" style="background:#2D3851;width:40%"> <a> <? print(date("D M d Y | G:i:s"));?></a> </li>
		 </ul>
	</div>
 <?php 
//--background:#4A5568
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

    <?php
            
//         include("upload.php");
        
        
function rendervideo($file){
 echo '<div style="margin-left:30px;">';
    echo '<div style="background-color:grey;height:200px;float:left;width:300px;">';
        
        echo '<div style="width:30%; text-align:center; float:left; clear:both;background-color:#546070;height:20px;">';
            // echo $file;
        echo '</div>';
        
        echo '<div style="width:30%; text-align:center; float:left;background-color:#5C6776;height:20px;">';
                echo $file;
        echo '</div>';
                echo '<div style="width:30%; text-align:center; float:left;background-color:#3A455B;height:20px;">';
                //echo $file;
        echo '</div>';
        
           // echo '<video controls  style="clear:both;" poster="title_anouncement.jpg" width="250">';
            echo '<video controls style="clear:both;" preload="none" loop="1" poster="title_anouncement.jpg" width="300">';
            echo '<source src="'.$file.'"' .'type="video/webm";codecs="vp8, vorbis" />'; 
          //  echo "enlarge video after play to see better"
            echo '</video>';
            echo '</div>';
             echo '</div>';
        /*
        <h3>This is a heading</h3>
        <p>This is a paragraph.</p>
        <div style="background-color:green">
        <p>This is a paragraph.</p>
                //   echo rand(1, 10)."\n";
        //  echo rand(1, 10)."<br>";
        */
            
            
        }  

        
        echo '<div style="background-color:green">';
        rendervideo("test.webm");
        rendervideo("test.webm"); 
        rendervideo("test.webm"); 
        rendervideo("test.webm");
        rendervideo("test.webm"); 
        rendervideo("test.webm"); 
                rendervideo("test.webm");
        rendervideo("test.webm"); 
        rendervideo("test.webm"); 
                rendervideo("test.webm");
        rendervideo("test.webm"); 
//         rendervideo("test.webm"); 
//         rendervideo("test.webm");  
//        rendervideo("test.webm");  
//        rendervideo("test.webm");  
 

        echo '</div>';
        
        
      ?>
      

	<div id="body" style="clear:both;border:1px black solid;background:white">
		<h1>VideoHost</h1><br>
		<p>Under Construction - Check back soon.
		<img src="const.gif" /><br><br>
		<abbr title="U">WIKI - comming soon</abbr></p>
		<h2>under Construction</h2>
	</div>
	
<br/>

<?php 
        //------ Counter -----------------------------------
        define("_BBC_PAGE_NAME", "index");
        define("_BBCLONE_DIR", "./bbclone/");
        define("COUNTER", _BBCLONE_DIR."mark_page.php");
        if (is_readable(COUNTER)) include_once(COUNTER);
 ?>


    <div class="footer"><h1></h1><a href="./bbclone/">Stats </a><h1></h1></div>
  </div>
 </div>
</body>
</html>

