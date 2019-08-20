<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Responsive Navigation Bar</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/font-awesome.min.js">
</head>
<body>
	<h1>dress and cosmetics and hairbands</h1>

		<div class="wrapper">
			<header>
				<nav>
					<div class="menu-icon">
						<i class="fa fa-bars fa-2x"></i>
						
					</div>
						<div class="logo">
							LOGO
						</div>

						<div class="menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact </a></li> 
							</ul>
						</div>
				</nav>
				
			</header>
				<div class="content">
					<p>
						Create Secure Websites That Work Across Devices Without Programming. Sign up Now. Automatic Backups. Archive Emails & Chats. Google Email Hosting. Draft Emails Offline. Easily Import Old Emails. Custom Business Email. Auto Suggest for Replies. Phishing Protection. Save Time w/ Smart Reply. Up To 30 Email Aliases.
					</p>

					<p>
						Create Secure Websites That Work Across Devices Without Programming. Sign up Now. Automatic Backups. Archive Emails & Chats. Google Email Hosting. Draft Emails Offline. Easily Import Old Emails. Custom Business Email. Auto Suggest for Replies. Phishing Protection. Save Time w/ Smart Reply. Up To 30 Email Aliases.
					</p>


					<p>
						Create Secure Websites That Work Across Devices Without Programming. Sign up Now. Automatic Backups. Archive Emails & Chats. Google Email Hosting. Draft Emails Offline. Easily Import Old Emails. Custom Business Email. Auto Suggest for Replies. Phishing Protection. Save Time w/ Smart Reply. Up To 30 Email Aliases.
					</p>
					
				</div>

		</div>

			<script type="text/javascript">
				
				$(document).ready(function(){
					$("menu-icon").on("click",function(){
						$("nav-ul").toogleClass("showing");
					});
				});	

				$("window").on("scroll",function(){
					if($(window).scrollTop()){
						$('nav').addClass('black');

					}

					else
					{
						$('nav').removeClass('black');
					}
				}) 
			</script>

</body>
</html>	