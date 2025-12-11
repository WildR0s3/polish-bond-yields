<?php
/* Smarty version 5.4.5, created on 2025-11-15 18:26:54
  from 'file:Hello.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6918b7de14a440_74970545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '252705fd5596890ec39b3de7c6c48a45b7502446' => 
    array (
      0 => 'Hello.tpl',
      1 => 1763227259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6918b7de14a440_74970545 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Hello World | Amelia framework</title>
</head>

<body>
    
    My value: <?php echo $_smarty_tpl->getValue('value');?>

    
    <?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('msg')->text;?>
</li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>

</body>

</html><?php }
}
