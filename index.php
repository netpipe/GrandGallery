<!DOCTYPE html>
<html xml:lang="en" lang="en">
<head>
    <meta name="Keywords" content="keywords" /><meta name="Description" content="so much fun you'll forget to..." />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="refresh" content="50"> <!--should be set higher for less traffic use DEVELOPMENT MODE-->

    <style type="text/css" media="screen, projection">
        @import "style.css";
    </style>
    
    <title>GrandGallery</title>
    
</head>
<!-- Remember to chmod 0755 uploads directory -->


<!--body {
  background: lightblue url("img_tree.gif") no-repeat fixed center;
  background-image: url('https://www.campaignmonitor.com/asse
} -->
<body style="background:#414141">
 <div id="wrapper">
  <div id="body">
    <div align="center" style="background-color:#2D3851;border:2px black solid;height:100%;width:100%;">
        <img src="data/logo/logo3.png" width="1000px" />
    </div><!--logo-->
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
	 </div> <!--menu-->
 <?php 
//--background:#4A5568
?>



    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="text" name="email" id="emailid">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    

    
<?php

//$sites="http://localhost:69/~netpipe/GrandGallery";

//         include("upload.php");
        
        
function rendervideo($file){
 //echo '<div style="background-color:red;margin-left:30px;">';
    echo '<div id="videobox" style="margin:20px;background-color:#c1c1c1;height:200px;float:left;border:2px black solid;width:330px;" >';
      //  echo '<div style="margin-left:  background-color:black;margin:2px">';
        
        echo '<div style="width:10%; text-align:center; float:left;background-color:black;height:20px;">';
        echo '</div>';
        
        echo '<div style="width:80%; text-align:center; float:left;background-color:#5C6776;height:20px;">';
                echo '<a href="uploads/' . $file . '">' . $file . '</a>';
        echo '</div>';
        
        echo '<div style="width:10%; text-align:center; float:left;background-color:#3A455B;height:20px;">';
        echo '</div>';
        
       // echo '<div style="clear: both;vertical-align: middle;width:auto;height:auto" >';
                echo '<div style="margin:20px;width:auto;height:auto" >';
                 // echo '<video controls  style="clear:both;" poster="title_anouncement.jpg" width="250">';
                    echo '<video controls style="" preload="none" loop="1" poster="play.png" width="300">';
                        echo '<source src="'.$file.'"' .'type="video/webm";codecs="vp8, vorbis" />'; 
                    echo '</video>';
                echo '</div>';
        
        echo '</div>';
  // echo '</div>';
//echo '</div>';

        
//         <h3>This is a heading</h3>
//         <p>This is a paragraph.</p>
//         <div style="background-color:green">
//         <p>This is a paragraph.</p>
//         //  echo rand(1, 10)."<br>";
        
        }  


        echo '<div id="vbody" style="background-color:green; margin:20px;border:2px black solid;width:auto;height:auto" >';
        
        $test=$_GET["page"];
        //echo $test;
        
        if  ( $_GET["page"] != "" ){
           rendervideo($test);
        
        }else{
        $files = glob('uploads/*.{webm,jpg,png,gif}', GLOB_BRACE);
            foreach($files as $file) {
            //echo $file;
            rendervideo($file);
        }
        }
//         $files = scandir('uploads/');
//             foreach($files as $file) {
//             //do your work here
//            // rendervideo($file);
//            echo $file;
//         }

       // for ($x = 0; $x <= 1; $x++) {
       // rendervideo("test.webm");
       // } 

        echo '</div>';  
        
        
      ?>
      

	<div id="footer2" style="clear:both;border:1px black solid;background:white">
		<h1>VideoHost</h1><br>
		<img src="const.gif" /><br><br>
		<abbr title="U">WIKI - comming soon</abbr>
		<h2>under Construction</h2>
	</div>
	
    <br>

  </div>
  
 </div>
</body>
</html>

