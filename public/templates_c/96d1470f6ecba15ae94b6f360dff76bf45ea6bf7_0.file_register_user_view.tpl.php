<?php
/* Smarty version 5.4.5, created on 2025-12-07 19:45:32
  from 'file:register_user_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6935cb4ce049f3_14174187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96d1470f6ecba15ae94b6f360dff76bf45ea6bf7' => 
    array (
      0 => 'register_user_view.tpl',
      1 => 1765133131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6935cb4ce049f3_14174187 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18977590666935cb4ce01c55_56435330', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_18977590666935cb4ce01c55_56435330 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Wprowadz nowego uzytkownika</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Podaj dane<br class="mobile-hide" />
                                    </h2>
                                    <p></p>
                                </header>
                                                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
register_new_user">
                                                <div class="row gtr-50">
                                                    <div class="col-6 col-12-small">
                                                        <input type="text" name="login" id="login" placeholder="nazwa uzytkownika" />
                                                    </div>
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <input type="password" name="password" id="password" placeholder="haslo uzytkownika"/>
                                                    </div>

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="style1" value="Zarejestruj" /></li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </form>
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
