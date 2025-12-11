<?php
/* Smarty version 5.4.5, created on 2025-11-30 21:06:43
  from 'file:add_bond_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_692ca3d38e40f4_59041785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbfb4090b2c9cf1ecd46b618af84994d88c6cbd7' => 
    array (
      0 => 'add_bond_view.tpl',
      1 => 1764533202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692ca3d38e40f4_59041785 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1946307953692ca3d38e19e1_57840972', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_1946307953692ca3d38e19e1_57840972 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Wprowadz nowa emisje</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Wprowadz dane<br class="mobile-hide" />
                                    </h2>
                                    <p></p>
                                </header>
                                                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
add_bond">
                                                <div class="row gtr-50">
                                                    
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
                                                        <input type="text" name="period_fixed_rate" id="period_fixed_rate" placeholder="oprocentowanie pierwszy okres" />
                                                    </div>
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <input id="margin" type="text" name="margin" placeholder="marza (dla COI i EDO)"/>
                                                    </div>

                                                    <div class="col-6 col-12-small">
                                                        <input id="penalty" type="text" name="penalty" placeholder="kara za zerwanie"/>
                                                    </div>

                                                    <div class="col-6 col-12-small">
                                                        <label for="emission_date">Data emisji</label>
                                                        <input id="emission_date" type="date" name="emission_date" id="emission_date"/>
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
