<?php
/* Smarty version 5.4.5, created on 2025-12-03 21:15:23
  from 'file:add_user_bonds.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69309a5b2aa150_04894473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd11467d70babd89446bf22b42168f03ae0bfaa63' => 
    array (
      0 => 'add_user_bonds.tpl',
      1 => 1764792912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69309a5b2aa150_04894473 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_50914001069309a5b2a77e4_95028989', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_50914001069309a5b2a77e4_95028989 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Wprowadz nowy zakup</div>
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
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>

                                    <section>
                                            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
add_user_bonds">
                                                <div class="row gtr-50">
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <input type="text" name="value" id="value" placeholder="kwota zakupu" />
                                                    </div>
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <select id="select" name="bond_type">
                                                            <option value="">-- Wybierz typ obligacji --</option>
                                                            <option value="ROR">ROR - obligacje roczne</option>
                                                            <option value="DOR">DOR - obligacje dwuletnie</option>
                                                            <option value="TOS">TOS - obligacje trzyletnie</option>
                                                            <option value="COI">COI - obligacje czteroletnie</option>
                                                            <option value="EDO">EDO - obligacje dziesiecioletnie</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <label for="purchase_date">Data zakupu</label>
                                                        <input type="date" name="purchase_date" id="purchase_date"/>
                                                    </div>

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="style1" value="Wprowadz" /></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
									    </section>
                                            
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
