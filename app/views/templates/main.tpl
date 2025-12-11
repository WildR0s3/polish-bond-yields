<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kalkulator obligacyjny</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><a href="index.php">Kalkulator obligacyjny</a></h1>
							<p>Twoj sposob na optymalizacje zakupow obligacji</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>
									<a href="#">Manager zone</a>
									<ul>
										<li><a href="{$conf->action_root}add_bond">Dodaj nowa emisje obligacji</a></li>
										<li><a href="{$conf->action_root}add_inflation_reading">Dodaj odczyt inflacji</a></li>
										<li><a href="{$conf->action_root}add_reference_rate">Dodaj stoper referencyjna NBP</a></li>
										{* <li>
											<a href="#">Sed consequat</a>
											<ul>
												<li><a href="#">Lorem dolor</a></li>
												<li><a href="#">Amet consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam nisl</a></li>
												<li><a href="#">Sed feugiat</a></li>
											</ul>
										</li>
										<li><a href="#">Nisl tempus</a></li> *}
									</ul>
								</li>
								<li><a href="{$conf->action_root}display_user_bonds">Zakupy obligacji - statystyki</a></li>
								
								{if isset($logged_user)}
									<li><a href="#">Zalogowano: {$logged_user->username}</a></li>
									{else}
									<li><a href="{$conf->action_root}login_show">Login</a></li>
								{/if}
								
								<li class="current"><a href="{$conf->action_root}logout">Logout</a></li>
							</ul>
						</nav>

				</section>

            {block name=main} Domyslna zawartosc tesci ..... {/block}


			{block name=messages}

			{if $msgs->isMessage()}
			<div class="messages bottom-margin">
				<ul>
				{foreach $msgs->getMessages() as $msg}
				{strip}
					<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
				{/strip}
				{/foreach}
				</ul>
			</div>
			{/if}

			{/block}

			<!-- Highlights -->
				{* <section id="highlights" class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div class="container">
						<div class="row aln-center">
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</section> *}

			<!-- Footer -->
				<section id="footer" class="wrapper">
					<div class="title">Generalne informacje</div>
					<div class="container">
						<header class="style1">
							<h2>Placeholder dla dodatkowego info</h2>
							<p>
								Moze dodac tutaj statystki?<br />
								To be determined
							</p>
						</header>
						<div class="row">
							{* <div class="col-6 col-12-medium"> *}

								<!-- Contact Form -->
									{* <section>
										<form method="post" action="#">
											<div class="row gtr-50">
												<div class="col-6 col-12-small">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="col-6 col-12-small">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
												<div class="col-12">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section> *}

							{* </div> *}
							<div class="col-12 col-12-medium">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-home">Mailing Address</h3>
													<p>
														WildR0s3 Inc.<br />
														Sesame Street<br />
														Shangri-La 00-000
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-comment">Social</h3>
													<p>
														<a href="#">@WildR0s3 Inc.</a><br />
														{* <a href="#">linkedin.com/untitled</a><br />
														<a href="#">facebook.com/untitled</a> *}
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-envelope">Email</h3>
													<p>
														<a href="#">pablo@mailtonowhere.com</a>
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-phone">Phone</h3>
													<p>
														{* (000) 555-0000 *}
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						<div id="copyright">
							<ul>
								<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/hide_unhide.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>