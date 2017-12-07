<!doctype html>
<html>
<head>
<style>
body {
	font-family: patua-one;
	font-style: normal;
	font-weight: 400;
	text-shadow: 4px 1px 4px white;
	background-image: url(images/background3.jpg);
	background-position: 0% 0%;
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	font-size: large;
}
#content {
    width: 450px;
    margin: 0 auto;
    padding: 20px 20px;
   
}
h1 {
	color: black;
	text-align: center;
	font-family: patua-one;
	font-style: normal;
	font-weight: 400;
	text-shadow: 4px 1px 4px white;
}
label {
    width: 5em;
    padding-right: 1em;
    float: left;
}
input[type="text"] {
	float: left;
	width: 25em;
	margin: .5em;
	border: solid 1px;
	font-family: "patua-one";
	text-decoration: none;
}
textarea {
    float: left;
    width: 35em;
    margin: 1em;
	border: solid 1px;
	font-family: "patua-one";
}	
input[type="button"] {
	float: left;
	margin-bottom: .5em;
	font-family: "patua-one";
}
br {
    clear: left;
}
.error {
    color: red;
    font-weight: bold;
}

#home{
	width: 50px;
	height: 15px;
	margin-left: 30px;	
	margin-top: 50px;
	font-family: "patua-one";
	font-size: 30px;
	font-weight: 400;
	}
	
#button{
	background-color: #B59191;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left: 750px;	
	margin-top: 0px;
	font-family: "patua-one";
	font-size: 20px;
	font-weight: 400;
	border-radius: 50%;
	border-style: solid;
	border-color: #504A4A;
	}
	
</style>
<meta charset="utf-8">
<title>Email</title>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/patua-one:n4:default.js" type="text/javascript"></script>
</head>

<body>

<!--Home Button-->
<div id="home">
	<button id="button"><a href="homepage.php">HOME</a> </button>
</div>
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "angeltatyana1@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
<div id="content">
<h1>Contact us</h1>
 <form method="post">
 
 	<label>Name:</label> <input name="subject" type="text" /><br />
	<label>Email:</label> <input name="email" type="text" /><br />
	 
  Message:<br />
  <textarea name="comment" rows="15" cols="50"></textarea><br />
  <input type="submit" value="Submit" />
  
  
  </form>
</div>
<?php
  }
?>  
</body>
</html>