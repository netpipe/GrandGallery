<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="Keywords" content="keywords" /><meta name="Description" content="so much fun you'll forget to..." />
<!--ZOOMRESTART-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--         <meta http-equiv="refresh" content="50"> -->
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
    echo '<div style="background-color:#c1c1c1;height:200px;float:left;border:2px black solid;width:330px;">';
        echo '<div style="margin-left:  background-color:black;margin:2px">';
        
        echo '<div style="width:10%; text-align:center; float:left;background-color:black;height:20px;">';
        echo '</div>';
        
        echo '<div style="width:80%; text-align:center; float:left;background-color:#5C6776;height:20px;">';
                echo $file;
        echo '</div>';
        
        echo '<div style="width:10%; text-align:center; float:left;background-color:#3A455B;height:20px;">';
        echo '</div>';
        
       // echo '<div style="clear: both;vertical-align: middle;width:auto;height:auto" >';
            echo '<div style="margin-left:13px;width:auto;height:auto" >';
           // echo '<video controls  style="clear:both;" poster="title_anouncement.jpg" width="250">';
                echo '<video controls style="" preload="none" loop="1" poster="title_anouncement.jpg" width="300">';
                echo '<source src="'.$file.'"' .'type="video/webm";codecs="vp8, vorbis" />'; 
            //  echo "enlarge video after play to see better"
                echo '</video>';
            echo '</div>';
            
       echo '</div>';
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

        
        echo '<div style="background-color:green; margin:20px" >';
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
		<img src="const.gif" /><br><br>
		<abbr title="U">WIKI - comming soon</abbr>
		<h2>under Construction</h2>
	</div>
	
<br/>

  </div>
 </div>
</body>
</html>

