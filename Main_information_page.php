<!DOCTYPE html>
<?php
session_start();
// Check if user is logged in. If not, set default values.
if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    $_SESSION['login'] = 0;
    $_SESSION['username'] = "login";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="style1.css"/>
    <meta name="description" content="Main page with all informations about the website"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Main informational page</title>
</head>

<body>
    <!-- Top nav bar with external css -->
    <div class="topnav">
   	 <a class="active" href="Main_information_page.php">Info Page</a>
   	 <a href="open_source.html">Open source</a>
  			 <!-- Login/Logout button -->
   	 <div class="topnav-username" style="float:right">
   			 <?php if ($_SESSION['login'] == 1): ?>
   	    		 <a href="logout.php">Logout</a>
   			 <?php else: ?>
   	    		 <a class="link" href="login_Form.php">Login</a>
   			 <?php endif; ?>
   	 </div>
   	 </div>
    <!--informations about the website -->
    <div style= "padding-left:20%;padding-right:20%">
   	 
   	 <!--pharagraph and headers -->
   	 <h2>Info Page</h2>
   	 <p>    
   	 this page is for the project and learning purposes for the subject of the open source,
   	 here are only few pages that mostly use php, css and one html, these pages are mostly used as a playgound
   	 for testing and learning how evrything work and to find out what and where something might work, for example open source page at the top didnt have login/logout button as this page is an html and php didnt work on it.
   	 </p>
   	 <h2>About Login info</h2>
   	 <p>
   	 Dont worry about forgeting your login or username if you forgot any of these just create new account,
   	 this website store username and pin in mariaDB in localhost it just username and pin for web so you dont have
   	 to worry about fogeting anything else or worring about phone number,email,etc.
   	 </p>
   		 
   	 <h2>open source subject</h2>
   	 <p>
   	 in open source we have learned a lot about open sources, linux and programs and codes like mariaDB, apache server, html, css, php, firewall, shell script, bash, server side basics, git hub and more, there was a lot covered in this one subject and that could be a bit longer list it a fun subject with a lot of stuff in it, and learning evrything bit by bit so it didnt felt like it overwhelming with a lot of stuff :).
   	 </p>
   	 
   	 <h2>open source page</h2>
   	 <p>
   	 open source page(second top tab at navbar) is just information what is open source, you can read to find out what they are and some base informations about it.
   	 </p>
   	 <h2>Author</h2>
   	 <p>Author Name:Mateusz Truszkowski<br/>
   	 Student in TUDublin in year 4 of study<br/>
   	 </p>
    </div>
    <!-- Footer -->
    <div class="footer">
   	 <p class="footer-P">Author: Mateusz Truszkowski<br/>
   	 <a href="mailto:mateusz.truszkowski11@gmail.com">EMAIL: mateusz.truszkowski11@gmail.com</a></p>
    </div>
</body>
</html>

