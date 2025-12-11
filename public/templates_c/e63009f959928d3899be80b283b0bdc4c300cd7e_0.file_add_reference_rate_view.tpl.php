<?php
/* Smarty version 5.4.5, created on 2025-12-02 20:05:52
  from 'file:add_reference_rate_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_692f389084f959_80215837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e63009f959928d3899be80b283b0bdc4c300cd7e' => 
    array (
      0 => 'add_reference_rate_view.tpl',
      1 => 1764701704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692f389084f959_80215837 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1463104657692f389084d1c1_17684984', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_1463104657692f389084d1c1_17684984 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Stopa referencyjna</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Wprowadz stope referencyjna<br class="mobile-hide" />
                                    </h2>
                                    <p></p>
                                </header>
                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
add_reference_rate">
                                                <div class="row gtr-50">
                                                    

                                                    <div class="col-12 col-12-small">
                                                        <input type="text" name="reference_rate_value" id="reference_rate_value" placeholder="stopa referencyjna (%)" />
                                                    </div>

                                                    <div class="col-12 col-12-small">
                                                        <label for="reference_rate_date">Data stopy referencyjnej</label>
                                                        <input id="reference_rate_date" type="date" name="reference_rate_date"/>
                                                    </div>

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="style1" value="Wprowadz" /></li>
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
