<?php
/* Smarty version 5.4.5, created on 2025-12-13 08:30:01
  from 'file:edit_user_bonds.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_693d15f9a37b52_62911019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c44fa4b15fe88573454ef94299674df168b7cd01' => 
    array (
      0 => 'edit_user_bonds.tpl',
      1 => 1765610991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_693d15f9a37b52_62911019 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1007861805693d15f9979765_24761478', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_1007861805693d15f9979765_24761478 extends \Smarty\Runtime\Block
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

                                        <div class="table-container">
                                                                                        <div class="table-header-grid">
                                                <div class="header-column">Data zakupu</div>
                                                <div class="header-column">Typ obligacji</div>
                                                <div class="header-column">Wartosc</div>
                                            </div>

                                            <div class="table-row-grid bond-summary-row" data-target-id="details">
                                                <div class="row-cell"><?php echo $_smarty_tpl->getValue('edited_bond')['purchase_date'];?>
</div>
                                                <div class="row-cell"><?php echo $_smarty_tpl->getValue('edited_bond')['bond_type'];?>
</div>
                                                <div class="row-cell"><?php echo $_smarty_tpl->getValue('edited_bond')['value'];?>
</div>        
                                            </div>
            
                                        </div>
                                        <br>


                                                                                                            	                                                            
                                                                   
                                            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
make_edition">
                                                <div class="row gtr-50">
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <input type="text" name="value" id="value" value=<?php echo $_smarty_tpl->getValue('edited_bond')['value'];?>
 />                                                     </div>
                                                    
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
                                                        <input type="date" name="purchase_date" id="purchase_date" value=<?php echo $_smarty_tpl->getValue('edited_bond')['purchase_date'];?>
/>
                                                        <input type="hidden" name="id_holding" value=<?php echo $_smarty_tpl->getValue('edited_bond')['id_holding'];?>
>
                                                    </div>

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="style1" value="Zamien" /></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>

                                        <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
make_deletion">
                                        <div class="col-12">
                                            <ul class="actions">
                                                <li><input type="submit" class="style1" value="Usun obligacje" /></li>
                                                 <input type="hidden" name="id_holding" value=<?php echo $_smarty_tpl->getValue('edited_bond')['id_holding'];?>
>
                                            </ul>
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
