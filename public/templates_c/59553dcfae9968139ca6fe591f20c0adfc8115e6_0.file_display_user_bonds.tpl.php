<?php
/* Smarty version 5.4.5, created on 2026-03-21 14:51:45
  from 'file:display_user_bonds.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69bea271e456d6_13192456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59553dcfae9968139ca6fe591f20c0adfc8115e6' => 
    array (
      0 => 'display_user_bonds.tpl',
      1 => 1774101101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:display_user_bonds_partial.tpl' => 1,
  ),
))) {
function content_69bea271e456d6_13192456 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_138637001869bea271e40e38_19362297', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_81536358669bea271e41512_15889797 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

                                        <div id="ajax-wrapper">
                                            <?php $_smarty_tpl->renderSubTemplate("file:display_user_bonds_partial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    <?php
}
}
/* {/block 'content'} */
/* {block 'main'} */
class Block_138637001869bea271e40e38_19362297 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Lista twoich obligacji</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2><br class="mobile-hide" />
                                    </h2>
                                    <p></p>
                                </header>
                            
                                <div class="row">
							        <div class="col-12">
                                    	
                                    <section>

                                    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_81536358669bea271e41512_15889797', 'content', $this->tplIndex);
?>


                                                    <div class="col-12">
                                                        <ul class="actions">
                                                        	                                                            <a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
add_user_bonds"><li><input type="submit" class="style1" value="Dodaj obligacje" /></li></a>
                                                        </ul>
                                                    </div>
                                                </div>
                                            
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
