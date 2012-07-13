<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>STUFF The Magic Mascot</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body id="home"> 
	<div id="navwrap">
	<nav>
	<img id="logo" src="img/logo.png">
		<ul>
			<li><a href="#">STUFF'S Bio</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">Videos</a></li>
			<li><a href="#">Book STUFF!</a></li>
			<li><a href="#">13 Before 13</a></li>
			<li><a href="#">STUFF'S School Show</a></li>
			<li class="social"><a href="#"><img class="social" src="img/f.png"></a></li>
			<li class="social"><a href="#"><img class="social" src="img/t.png"></a></li>
		</ul>
	</nav>
	</div>
	<div id="wrapper">
			<img id="cta" src="img/banner.png">
			<img id="ball" src="img/ball.png">
			<p id="tagline">LOCK UP YOUR PETS. HIDE YOUR TOYS. ITS TIME TO MAKE SOME NOISE!</p>
			<div id="homecontent">
				<div id="contentheads"><! need this to align h2>
					<h2>STUFF<span style="color:black;">Tweets!</span></h2>
					<h2>13 <span style="color:black;">Before</span> 13</h2>
					<h2>Latest<span style="color:black;">Videos</span></h2>
				</div>
			<div id="columncontent">
				<div class="column" id="col1">
					<div id="twitterScript"><!- Official Twitter JS App ->
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
						<script>
							new TWTR.Widget({
								version: 2,
								type: 'profile',
								rpp: 5,
								interval: 30000,
								width: 300,
								height: 340,
								theme: {
									shell: {
										background: '#000',
										color: '#f5f5f5'
										},
									tweets: {
										//background: '#000000',
										background: '#fff',
										//color: '#eeeeee',
										color: '#000000',
										//links: '#62BD19'
										links: '#0077C0'
										}
									},
									features: {
										scrollbar: false,
										loop: false,
										live: false,
										behavior: 'all'
											}
								}).render().setUser('STUFF_Mascot').start();
					</script>
					</div><! End Twitter Div>				
				</div>
				<div class="column" id="col2">
					<ol id="yearTracker">
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
						<li>1    <span style="color:#0077c0;"> Stuff Does Amazing Dunks</span>    1/1/2012</li>
					</ol>
				</div>
				<div class="column" id="col3">
					<img src="img/media.png" style="margin-left: 60px; border: 6px solid black; margin-top: 10px">
				</div>
			</div><!- End Column Content ->
			</div><!- End Home Content ->
	</div><! End Wrapper ->
	<div id="footwrap">
		<img src="img/logo2.png">
		<ul>
			<li><a href="#">STUFF'S Bio</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">Videos</a></li>
			<li><a href="#">Book STUFF!</a></li>
			<li><a href="#">13 Before 13</a></li>
			<li><a href="#">STUFF'S School Show</a></li>
			<li class="social"><a href="#"><img class="social" src="img/f.png"></a></li>
			<li class="social"><a href="#"><img class="social" src="img/t.png"></a></li>
		</ul>

	</div>
</body>
</html>