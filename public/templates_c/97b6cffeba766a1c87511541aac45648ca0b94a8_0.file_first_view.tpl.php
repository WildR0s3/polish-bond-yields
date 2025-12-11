<?php
/* Smarty version 5.4.5, created on 2025-11-22 14:56:12
  from 'file:first_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6921c0fc344db5_10308727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b6cffeba766a1c87511541aac45648ca0b94a8' => 
    array (
      0 => 'first_view.tpl',
      1 => 1763819764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6921c0fc344db5_10308727 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17659105816921c0fc341302_00419091', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_17659105816921c0fc341302_00419091 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Oblicz zyski z obligacji</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Wybierz kwote oraz typ obligacji<br class="mobile-hide" />
                                    a nastepnie przelicz i otrzymaj wynik</h2>
                                    <p>Najs</p>
                                </header>
                                <a href="#" class="image featured">
                                    <img src="images/obligacje.jpg" alt="" />
                                </a>
                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calculate">
                                                <div class="row gtr-50">
                                                    <div class="col-6 col-12-small">
                                                        <input type="text" name="kwota" id="value" placeholder="kwota zakupu" />
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
                                                        <label for="input_date">Data zakupu</label>
                                                        <input id="input_date" type="date" name="purchase_date" id="purchase_date"/>
                                                    </div>

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="style1" value="Oblicz" /></li>
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
