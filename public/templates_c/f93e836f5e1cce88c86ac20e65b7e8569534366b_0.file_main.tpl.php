<?php
/* Smarty version 5.4.5, created on 2026-03-21 14:12:33
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69be9941b20213_65304524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f93e836f5e1cce88c86ac20e65b7e8569534366b' => 
    array (
      0 => 'main.tpl',
      1 => 1774098732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69be9941b20213_65304524 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
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
										<li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
add_bond">Dodaj nowa emisje obligacji</a></li>
										<li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
add_inflation_reading">Dodaj odczyt inflacji</a></li>
										<li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
add_reference_rate">Dodaj stoper referencyjna NBP</a></li>
																			</ul>
								</li>
								<li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
display_user_bonds">Zakupy obligacji - statystyki</a></li>
								
								<?php if ((true && ($_smarty_tpl->hasVariable('logged_user') && null !== ($_smarty_tpl->getValue('logged_user') ?? null)))) {?>
									<li><a href="#">Zalogowano: <?php echo $_smarty_tpl->getValue('logged_user')->username;?>
</a></li>
									<?php } else { ?>
									<li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
login_show">Login</a></li>
								<?php }?>
								
								<li class="current"><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
logout">Logout</a></li>
							</ul>
						</nav>

				</section>

            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_92397631569be994196cb54_55267368', 'main');
?>



			<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_46199541069be9941a2cfe6_63173129', 'messages');
?>


			<!-- Highlights -->
				
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
							
								<!-- Contact Form -->
									
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
			<?php echo '<script'; ?>
 src="assets/js/ajax.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/hide_unhide.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'main'} */
class Block_92397631569be994196cb54_55267368 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views\\templates';
?>
 Domyslna zawartosc tesci ..... <?php
}
}
/* {/block 'main'} */
/* {block 'messages'} */
class Block_46199541069be9941a2cfe6_63173129 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views\\templates';
?>


			<?php if ($_smarty_tpl->getValue('msgs')->isMessage()) {?>
			<div class="messages bottom-margin">
				<ul>
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
				<li class="msg <?php if ($_smarty_tpl->getValue('msg')->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->getValue('msg')->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->getValue('msg')->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->getValue('msg')->text;?>
</li>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<?php }?>

			<?php
}
}
/* {/block 'messages'} */
}
