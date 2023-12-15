<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head><!--only footer and background color is from external css-->
    <link rel="stylesheet" href="style1.css"/>
    <meta name="description" content="Registration page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Registration page</title>

<!-- Internal login style-->
<style>    
    .Registration-form {
   	 margin: 50px auto;
   	 width: 300px;
   	 padding: 30px 25px;
   	 background: white;}
</style>
</head>
<body>
    <div class="topnav">
   	 <a href="Main_information_page.php">Info Page</a>
   	 <a href="open_source.html">Open source</a>
    </div>
	<form class="Registration-form" name="account-creator" method="post" action="check-creator.php">
    	<h1 class="login-title">Registration</h1>
    	<input type="text" class="login-input" name="username" placeholder="Username" required="required"/>
    	<input type="password" class="login-input" name="ID" maxlength="4" placeholder="ID/PIN" required="required"/>
    	<input type="submit" name="submit" value="Register" class="login-button"/>
    	<p class="link"><a href="login_Form.php">Click to Login</a></p>
	</form>
    <div class="footer"><!--footer is in div because only html 5 support footer and this is older version that didnt support it -->
   	 <p class="footer-P">Author: Mateusz Truszkowski<br/>
   	 <a href="mailto:mateusz.truszkowski11@gmail.com">EMAIL: mateusz.truszkowski11@gmail.com</a>
   	 </p>
    </div>
</body>
</html>

