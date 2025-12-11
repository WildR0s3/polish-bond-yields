<?php
/* Smarty version 5.4.5, created on 2025-12-11 20:36:51
  from 'file:display_user_bonds.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_693b1d53daa404_83549783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59553dcfae9968139ca6fe591f20c0adfc8115e6' => 
    array (
      0 => 'display_user_bonds.tpl',
      1 => 1765481736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_693b1d53daa404_83549783 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1842525525693b1d53d92e00_58328185', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_1842525525693b1d53d92e00_58328185 extends \Smarty\Runtime\Block
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
                                                <div class="header-column">Aktualne odsetki netto</div>
                                                <div class="header-column">Sumaryczne odsetki netto</div>
                                            </div>
            
                                                                                        
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('TOS_array'), 'bond');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('bond')->value) {
$foreach0DoElse = false;
?>
                                                
                                                <div class="table-row-grid bond-summary-row" data-target-id="details-<?php echo $_smarty_tpl->getValue('bond')->display_id;?>
">
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->purchase_date;?>
</div>
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->bond_type;?>
</div>
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->value;?>
</div>
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_current_total_interest;?>
</div>
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_total_interest;?>
</div>

                                                    <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
edit_user_bonds">
                                                        <input type="hidden" name="id_holding" value=<?php echo $_smarty_tpl->getValue('bond')->id_holding;?>
>
                                                        <input type="submit" class="edit-type" value="Edit" /></li>
                                                    </form>
                                                </div>

                                                <div class="bond-detail-row" id="details-<?php echo $_smarty_tpl->getValue('bond')->display_id;?>
">
                                                    <div class="sub-table-container">
                                                        
                                                        <div class="sub-table-header-grid">
                                                            <div class="sub-header-column">Okres</div>
                                                            <div class="sub-header-column">Oprocentowanie (%)</div>
                                                            <div class="sub-header-column">Naliczone odsetki netto</div>
                                                            <div class="sub-header-column">Sumaryczne odsetki netto</div>
                                                            <div class="sub-header-column">Dzienne odsetki</div>
                                                        </div>
                                                        <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getValue('bond')->periods-1+1 - (0) : 0-($_smarty_tpl->getValue('bond')->periods-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            
                                                            <div class="sub-table-row-grid">
                                                                <div class="sub-row-cell">Okres <?php echo $_smarty_tpl->getValue('i')+1;?>
</div>
                                                                <div class="sub-row-cell"><?php echo $_smarty_tpl->getValue('bond')->gross_percentage_returns[$_smarty_tpl->getValue('i')];?>
 %</div>
                                                                <div class="sub-row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_current_returns[$_smarty_tpl->getValue('i')];?>
</div>
                                                                <div class="sub-row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_interests[$_smarty_tpl->getValue('i')];?>
</div>
                                                                <div class="sub-row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_daily_period_interest[$_smarty_tpl->getValue('i')];?>
</div>
                                                            </div>
                                                    
                                                        <?php }
}
?>
                                                        
                                                    </div>
                                                </div>

                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('COI_array'), 'bond');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('bond')->value) {
$foreach1DoElse = false;
?>
                                                
                                                <div class="table-row-grid bond-summary-row" data-target-id="details-<?php echo $_smarty_tpl->getValue('bond')->display_id;?>
">
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->purchase_date;?>
</div>
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->bond_type;?>
</div>
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->value;?>
</div>
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_current_total_interest;?>
</div>
                                                    <div class="row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_total_interest;?>
</div>

                                                    <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
edit_user_bonds">
                                                        <input type="hidden" name="id_holding" value=<?php echo $_smarty_tpl->getValue('bond')->id_holding;?>
>
                                                        <input type="submit" class="edit-type" value="Edit" /></li>
                                                    </form>

                                                </div>

                                                <div class="bond-detail-row" id="details-<?php echo $_smarty_tpl->getValue('bond')->display_id;?>
">
                                                    <div class="sub-table-container">
                                                        
                                                        <div class="sub-table-header-grid">
                                                            <div class="sub-header-column">Okres</div>
                                                            <div class="sub-header-column">Oprocentowanie (%)</div>
                                                            <div class="sub-header-column">Naliczone odsetki netto</div>
                                                            <div class="sub-header-column">Sumaryczne odsetki netto</div>
                                                            <div class="sub-header-column">Dzienne odsetki</div>
                                                        </div>
                                                        <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getValue('bond')->periods-1+1 - (0) : 0-($_smarty_tpl->getValue('bond')->periods-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            
                                                            <div class="sub-table-row-grid">
                                                                <div class="sub-row-cell">Okres <?php echo $_smarty_tpl->getValue('i')+1;?>
</div>
                                                                <div class="sub-row-cell"><?php echo $_smarty_tpl->getValue('bond')->gross_percentage_returns[$_smarty_tpl->getValue('i')];?>
 %</div>
                                                                <div class="sub-row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_current_returns[$_smarty_tpl->getValue('i')];?>
</div>
                                                                <div class="sub-row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_interests[$_smarty_tpl->getValue('i')];?>
</div>
                                                                <div class="sub-row-cell"><?php echo $_smarty_tpl->getValue('bond')->net_daily_period_interest[$_smarty_tpl->getValue('i')];?>
</div>
                                                            </div>
                                                    
                                                        <?php }
}
?>

                                                    </div>
                                                </div>

                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        
                                        </div>


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
