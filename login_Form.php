<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--only footer and background color is from external css-->
<head>
    <link rel="stylesheet" href="style1.css"/>
    <meta name="description" content="login page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login-page</title>
</head>
<body>
    <div class="topnav">
   	 <a href="Main_information_page.php">Info Page</a>
   	 <a href="open_source.html">Open source</a>
    </div>
    <!--setting up the cookies-->
    <form class="login-form" name ="loginChecker" method = "post" action="checkLogin.php"> <!-- when the form is submitted the checkLogin.php function is called -->
   	 <div class="imgcontainer">
   		 <?php
   		 session_start();
   		 include("topImage.php");
   		 setcookie("test_cookie", "test", time() + 3600, '/');    
   		 ?>
   	 </div>
   	 <div class="container">
   		 <label for="userNameTextField"></label> <!--displays a label & associates it with the element whose id attribute is set to "firstNameTextField"-->
   		 <input type="text" name="username" id="userNameTextField" value="" maxlength="20" placeholder="Username" required="required"/> <!--displays an input field whose id attribute is set to "firstNameTextField"-->
   		 <br/>
   		 <label for="passwordTextField"></label> <!--displays a label & associates it with the element whose id attribute is set to "Password"-->
   		 <input type="password" name="ID" value="" id="passwordTextField"  maxlength="4" placeholder="ID/PIN" required="required"/> <!--displays an input field whose id attribute is set to "Password"-->
   		 <br/>
   		 <label>Show Password:</label><!--box to show password-->
   		 <input type="checkbox" onclick="passwordchecker()"/>
   		 <br/>
   		 <input type="submit" name="submit" value="Login"/> <!--displays a submit button -->
   		 <a class="account-button"  href="Registration_page.php">Create-Account</a> <!--displays a submit button -->
   		 <br/>
   	 </div>
     	 <div class="login-Error-box">
   		 <?PHP //login error message
   		 if (isset($_SESSION['error'])) {
   			print($_SESSION['error']);
   			unset($_SESSION['error']);
   		 }
   	    
   		 if(count($_COOKIE) > 0) {//checking if cookies are ON
   		 }
   		 else {//if off display warning
   			 echo "Cookies are disabled. turn on cookies to make the website work";
   		 }
   		 ?>
   	 </div>
    </form>
    <div class="footer"><!--footer is in div because only html 5 support footer and this is older version that didnt support it -->
   	 <p class="footer-P">Author: Mateusz Truszkowski</br>
   	 <a href="mailto:mateusz.truszkowski11@gmail.com">EMAIL: mateusz.truszkowski11@gmail.com</a></p>
    </div>
    <script type="text/javascript">
   	 //Function for Button to show Password
   	 function passwordchecker() {
   		 var x = document.getElementById("passwordTextField");
   		 if (x.type === "password") {
   			 x.type = "text";
   			 }
   		 else {
   			 x.type = "password";
   			 }
   	 }
    </script>
</body>
</html>

