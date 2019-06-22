<!DOCTYPE html>
<html xml:lang="en" lang="en">
<head>
    <meta name="Keywords" content="keywords" /><meta name="Description" content="Grand Gallery - public domain porn, xxx, erotic art" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<meta http-equiv="refresh" content="20">-->
    <!--should be set higher for less traffic use DEVELOPMENT MODE-->

    <style type="text/css" media="screen, projection">
        @import "style.css";
    </style>
    
    <title>Grand Gallery</title>
    
</head>
<!-- Remember to chmod 0755 uploads directory -->


<!--body {
  background: lightblue url("img_tree.gif") no-repeat fixed center;
  background-image: url('')
} -->

<body style="background:#968D87">
 <div id="wrapper">
	 <!--logo-->
    <div align="center" style="color:black;background-color:#4A5568;border-radius: 5px 5px 5px 5px;border:2px black solid;height:100%;width:100%;">
        <div style="margin:1px; border-radius: 15px 15px 15px 15px; border:black solid 1px; background:#515151">
        	<img src="mainpage.png" width="800px" />
        </div>
       <!-- <img src="logo3.png" width="1000px" /> -->
	<!--<div style="border:2px black solid;" > style="border:2px black solid;" -->
	 <ul id="TJK_dropDownMenu">
		<li id="AB" style="background:#616C7A ; width:12% "> <a href="index.php">Menu</a>	
  		 <ul>
			<li> <a href="./index.php">Home</a> 
			<li> <a href="?page=pictures">Pictures</a> </li>
			<li> <a href="?page=videos">Videos</a>  </li>
			<li> <a href="?page=contact">Contact</a>  </li>
		 </ul>
		</li>
		<li id="CF" style="background:#5C6776 ; width:12% ">  <a href="?page=licence">Content Licence</a> </li>
        <li id="3m" style="background:#546070 ; width:12% "> <a href="?page=rmcookie"> </a>	</li>
        <li id="3m" style="background:#4A5568 ; width:12% ">  <a href="forums.php"> test</a>	
        <li id="3m" style="background:#3A455B ; width:12% "> <a href="forums.php"> </a>	 </li>
        <li id="3m" style="text-align:right;background:#2D3851;width:40%"> <div style="margin-right:20px;"> <a> <?php print(date("D M d Y | G:i:s"));?> </a> </div> </li>
	  </ul>
	</div> <!-- menu -->

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p style="color:#F78989">Select public domain image/video to upload 18+ only material must be your own please include email address 512mb limit:
        <input type="file" name="fileToUpload" id="fileToUpload">
        email:
        <input type="text" name="emailid" id="emailid">
        
        <input type="submit" value="Upload" name="submit">
        </p>
    </form>
    

    
<?php
//~ ini_set('display_errors', 1);
//~ ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$sitename="http://www.grandgallery.net";
            $cookie_name = "localuser2";
            $cookie_value = "AgeVerified"; 


//$sites="http://localhost:69/~netpipe/GrandGallery";
//         include("upload.php");
        
        
	function render($file){
		$fileinfo=pathinfo($file);
	 							 $dirname = basename($file);
	// echo '<div style="background-color:red;width:auto;height:auto">'; 
	// echo "test";
				echo '<p>';
		echo '<div id="videobox" style="border-radius: 15px 15px 15px 15px;margin:20px;background-color:#c1c1c1;height:200px;float:left;border:2px black solid;width:330px;" >';
			//TITLEBAR for content box
		    echo '<div style="margin-left:  background-color:black;margin:2px">';
				//first bubble
				echo '<div style="border-radius: 15px 15px 15px 15px;width:10%; text-align:center; float:left;background-color:black;height:20px;">';
				echo "PIC";
				echo '</div>';
				//second bubble
				echo '<div style="border-radius: 15px 15px 15px 15px;width:80%; text-align:center; float:left;background-color:#5C6776;height:20px;">';
				if ( $fileinfo['extension'] == "") {
					echo '<a href="?page=' . $file . '">' . $dirname . '</a>';
				}
				else {
					echo '<a href="' . $file . '">' . $file . '</a>';
				}
				echo '</div>';
				//3rd bubble
				echo '<div style="border-radius: 15px 15px 15px 15px;width:10%; text-align:center; float:left;background-color:#3A455B;height:20px;">';
				echo '</div>';
			echo '</div>'; //titlebar

		   // echo '<div style="clear: both;vertical-align: middle;width:auto;height:auto" >';
		   
				//content box
				echo '<div style="clear:both;width:auto;height:auto" >';
					 // echo '<video controls  style="clear:both;" poster="title_anouncement.jpg" width="250">';


					 if ( $fileinfo['extension'] == "webm" ) {
						echo '<video controls style="" preload="none" loop="1" poster="play.png" width="300">';
							echo '<source src="' . $file . '"' .'type="video/webm";codecs="vp8, vorbis" />'; 
						echo '</video>';
					 } elseif ( $fileinfo['extension'] == "" ) { 
						// echo "testing123";
						 echo '<div align="middle" style="height:300px;width:300px"/>';
						 $dirname = basename($file);
						// echo  $pwd . $file.'/'. $dirname .'.png';
						 echo '<p><a href="?page=' . $file . '">' ;
						 echo '<img src="' . $pwd . $file.'/'. $dirname .'.png' . '"' . ' alt="'. $file .'"' .' width="' .'200px"' . ' height="'.'150px"' . '/></a></p>';
						 echo "</div>";		
						// echo "</p>";
					 }
					 else { 
						 //~ echo "<img src=" . '"http://grandgallery.net/' . $file . 'width="400px"' . "/>"; 
						 echo "<p><a href=" . $pwd . $file . ">";
						 echo '<img src="' . $pwd . $file . '"' . ' alt="'. $file .'"' .' width="' .'300px"' . ' height="'.'150px"' . '/>'; 
						 echo '</a></p>';	
							}
				echo '</div>';//content box
	   echo '</div>'; //videobox
	   echo "</p>";

	}  //contentbox generator
	
	
        //start of green div content box
        echo '<div id="vbody" style="border-radius: 15px 15px 15px 15px;clear:both;text-align:center;background-color:green; margin:20px;border:2px black solid;" >';
        
        
        //GET PAGE CALLBACK
        $page=$_GET["page"];
       
        // SET COOKIE
        if  ( ($_POST['age'] == "agree") && $page == "setcookie" ){
 
				//https://stackoverflow.com/questions/37630953/how-can-cookies-be-created-on-client-side-without-javascript
				//	setcookie($cookie_name, $cookie_value, time()-3600);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day;

					//	echo isset($_COOKIE[$cookie_name]);
            if( !isset($_COOKIE[$cookie_name]) ) {
             //   echo "Cookie named '" . $cookie_name . "' is not set!";
                echo "cookie, set";
            } else {
                echo "Cookie '" . $cookie_name . "' is set!<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
            }

            $other_Atrributes = "" ;
            //echo 'window.open("index.php?page=ageverified", $other_Attributes)';
            header("location: http://www.grandgallery.net") ;
         }
        //REMOVE COOKIE
        elseif  ( ($_COOKIE[$cookie_name] == "AgeVerified") && $page == "rmcookie" ){
				//unset($_COOKIE[$cookie_name]);
				setcookie($cookie_name, "", time()-3600, "/");
				header("location:" . $sitename) ;
				echo "cookie unset";
        }        

        // CONTACT
        elseif  ( $page == "contact" && true){
            echo '<a href="mailto:admin@grandgallery.net" > Email </a>';
         //   include ("user.php");
          // rendervideo($test);
          
		// VIDEOS
        } 
           elseif  ( $page == "message" && true){
          //  echo '<a href="mailto:admin@grandgallery.net" > Email </a>';
            include ("user.php");
          // rendervideo($test);
          
		// VIDEOS
        } 
        elseif ( ($_COOKIE[$cookie_name] == "AgeVerified") && $page == "videos" ) {
			echo '<p align="middle"><B>GrandGallery Videos</B></p>';
			$movpath = "uploads/mov/authd";
			$dirs = glob($movpath . '/*' , GLOB_ONLYDIR);
			foreach($dirs as $dirs2) {
				render($dirs2);
				//get first file from dir to display as picture
			}
        // PICTURES
        } 
        elseif ( ($_COOKIE[$cookie_name] == "AgeVerified") && $page == "pictures" ) {
			echo '<p align="middle"><B>GrandGallery Pictures</B>';
			$picpath = "uploads/pic/authd";
			$dirs = glob($picpath . '/*' , GLOB_ONLYDIR);
			foreach($dirs as $dirs2) {
				render($dirs2);
				//get first file from dir to display as picture
			}
            echo "</p>";
        }  
									//isset($_COOKIE[$cookie_name]);
        // SET COOKIES
        elseif  ( ( $_COOKIE[$cookie_name] != "AgeVerified") && $page == "" ){

            //if ( $_COOKIE["user"] == "AgeVerified"{
          //  echo "testing";
            
           echo ' <form action="index.php?page=setcookie" method="post">';
           echo ' Age Verification Are you 18+ years old type agree to continue <input type="text" name="age"><br>';
           echo ' <input type="submit" value="agree" name="submit"> ';
           echo ' </form> ';
            
        }
        //Licence
        elseif  ( $page == "licence" ){ 
				echo '<div style="border-radius: 15px 15px 15px 15px;margin:20px;background:#d0d0d0;">';
                echo "<br><b> Uploaded content is under a modified public domain licence.<br></b>";
				echo "<br> All video's and pictures are to only be used on content hosting sites or in semi-private distributions (email for questions).<br>";
				echo "The licence prevents any mocking or intentional discrediting of the authors work. <br><br>";
				echo "Video's are to be kept ASIS after I convert them to WEBM.<br>";
				echo "<br> If you want your email included with the video put it in the video or append it to the email address that you do, also i claim ability to rename video's.<br><br> ";
				echo "</div>";
		}
        elseif  ( ( $_COOKIE[$cookie_name] == "AgeVerified" ) && $page == "" ){
			echo "authd page";
			render("videos");
			render("pictures");
			//render("stories");
			}
		else {
			//$expandedpath=site_root($page);
			$expandedpath = explode("/", $page);
			$expandedpath = $expandedpath[count($expandedpath) - 3];
			echo $expandedpath;
			if ( $expandedpath == "pic"){
			//uploads/mov/authd/
                $files = glob($page.'/*.{JPG,GIF,PNG,jpg,png,gif}', GLOB_BRACE);

			} elseif ( $expandedpath == "mov"){
				
				$files = glob($page.'/*.{webm}', GLOB_BRACE);

			}
			    foreach($files as $file) {
					render($file);
				}
		//	echo "unknown issue or age not verified.";
         //   header("location: http://www.grandgallery.net") ;
			}


        echo '</div>'; //end of green content box
      ?>
      

	<div id="footer2" style="border-radius: 15px 15px 15px 15px;margin:10px;background:#d0d0d0;clear:both;border:1px black solid;">
	    			<br><br>

<!--
		<h1>VideoHost</h1><br>
		<img src="const.gif" /><br><br>
		
				<abbr title="U">WIKI - comming soon</abbr>
-->
<!--
//         <h3>This is a heading</h3>
//         <p>This is a paragraph.</p>
//         <div style="background-color:green">
//         <p>This is a paragraph.</p>
//         //  echo rand(1, 10)."<br>";
-->

        <i>adult games / video's / pictures and reading material<br>
        <br> running this site requires no javascript or flash<br><br></i>


	</div>	<!-- footer --> 
	
    <br>

  </div> <!--wrapper-->
  

</body>
</html>
