<?php
/* Smarty version 5.4.5, created on 2025-12-07 20:45:04
  from 'file:login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6935d9409b4325_83977795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1738cf0e5f0ffc781d71c7815956bafec367138' => 
    array (
      0 => 'login_view.tpl',
      1 => 1765136701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6935d9409b4325_83977795 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5478435366935d9409b0ea1_90713958', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_5478435366935d9409b0ea1_90713958 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Wprowadz dane logowania</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Podaj login i haslo<br class="mobile-hide" />
                                    </h2>
                                    <p></p>
                                </header>
                                                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login">
                                                <div class="row gtr-50">
                                                    <div class="col-6 col-12-small">
                                                        <input type="text" name="login" id="login" placeholder="twoj login" />
                                                    </div>
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <input type="password" name="password" id="password" placeholder="podaj haslo"/>
                                                    </div>

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="style1" value="Zaloguj" /></li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </form>

                                            <from>
                                            <div class="col-12">
                                                <ul class="actions">
                                                                                                        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
register_user"><li><input type="submit" class="style1" value="Zarejestruj sie" /></li></a>
                                                </ul>
                                            </div>
                                             </from>

									    </section>

                                    </div>
                                </div>

                            </article>
                        </div>

                </div>
            </div>

<?php
}
}
/* {/block 'main'} */
}
