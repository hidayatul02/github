<?php
include('../Config/googleapi.php');
$loginurl = $google_client->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Login | Dayat Variasi</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
				background: #e1c192 url(images/wood_pattern.jpg);
			}
		</style>
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
            </div><!--/ Codrops top bar -->
			
			<header>
			
				<h1><strong>---Dayat Variasi---</strong></h1>
				<h2>Toko Online Resmi Dayat Variasi</h2>
				
				
			</header>
			
			<section class="main">
				<form class="form-2" method="POST" action="../Controller/proses.php?aksi=login">
					<h1><span class="log-in">Log in</span> or <span class="sign-up">sign up</span></h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>Username</label>
						<input type="text" name="name" placeholder="Username">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<input type="password" name="password" placeholder="Password">
					</p>
					<p class="clearfix"> 
						<a href="regis.php" class="log-twitter">Register</a>    
						<input type="submit" name="submit" value="Log in">
					</p><br>
					<p class="clearfix" style="padding-left : 100px">
						<a href="<?php echo $loginurl; ?>" class="log-twitter">Google</a>
					</p>
				</form>​​
			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function(){
			    $(".showpassword").each(function(index,input) {
			        var $input = $(input);
			        $("<p class='opt'/>").append(
			            $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
			                var change = $(this).is(":checked") ? "text" : "password";
			                var rep = $("<input placeholder='Password' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
			             })
			        ).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
			    });

			    $('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');    
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
			    });
			});
		</script>
    </body>
</html>