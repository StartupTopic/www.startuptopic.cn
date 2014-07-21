<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // username and password sent from Form
    $myusername=addslashes($_POST['username']);
    $mypassword=addslashes($_POST['password']);
    $realusername_md5 = "3425f115ee1ecf591fb06d635c37d990";
    $realpassword_md5 = "2ee0272b8e1a9705dc3ebe91c10b32f4";
    if(md5($myusername)==$realusername_md5 && md5($mypassword)==$realpassword_md5)
      $login_success=1;
    else
      $login_success=0;
    if($login_success==1)
      {
        session_register("myusername");
        $_SESSION['login_user']=$myusername;

        $originatingpage = $_SESSION["originatingpage"];

        /* $f = fopen("test.txt", "aw"); */
        /* fwrite($f, "originatingpage:" . $originatingpage . "\n"); */
        /* fclose($f); */

        unset($_SESSION["originatingpage"]);
        header('Location: http://'.$originatingpage);
      }
    else
      {
        unset($_SESSION["login_user"]);
        header("location: denny_login.php");
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="twitter-bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px;
      }
      .container {
        width: 300px;
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px;
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

	  .login-form {
		margin-left: 65px;
	  }

	  legend {
		margin-right: -50px;
		font-weight: bold;
	  	color: #404040;
	  }

    </style>

</head>
<body>
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="login-form">
					<h2>Login</h2>
					<form action="" method="post">
						<fieldset>
							<div class="clearfix">
								<input type="text" name="username">
							</div>
							<div class="clearfix">
								<input type="password" name="password">
							</div>
							<button class="btn primary" type="submit">Sign in</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div> <!-- /container -->
</body>
</html>