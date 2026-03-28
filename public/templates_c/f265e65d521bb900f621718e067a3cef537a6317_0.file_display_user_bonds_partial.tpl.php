<?php
/* Smarty version 5.4.5, created on 2026-03-21 14:51:33
  from 'file:display_user_bonds_partial.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69bea265b10f55_30001176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f265e65d521bb900f621718e067a3cef537a6317' => 
    array (
      0 => 'display_user_bonds_partial.tpl',
      1 => 1774101091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69bea265b10f55_30001176 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?><nav class="pagination-container">
    <ul class="pagination-list">
        <?php if ($_smarty_tpl->getValue('current_page') > 1) {?>
            <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
display_user_bonds?page=<?php echo $_smarty_tpl->getValue('current_page')-1;?>
"
                    onclick="ajaxReloadSubPage(this.href, 'ajax-wrapper'); return false;">&laquo;</a></li>
        <?php }?>
    

        <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getValue('total_pages')+1 - (1) : 1-($_smarty_tpl->getValue('total_pages'))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <li class="<?php if ($_smarty_tpl->getValue('current_page') == $_smarty_tpl->getValue('i')) {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
display_user_bonds?page=<?php echo $_smarty_tpl->getValue('i');?>
"
                    onclick="ajaxReloadSubPage(this.href, 'ajax-wrapper'); return false;"><?php echo $_smarty_tpl->getValue('i');?>
</a>
            </li>
        <?php }
}
?>

        <?php if ($_smarty_tpl->getValue('current_page') < $_smarty_tpl->getValue('total_pages')) {?>
            <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
display_user_bonds?page=<?php echo $_smarty_tpl->getValue('current_page')+1;?>
"
                    onclick="ajaxReloadSubPage(this.href, 'ajax-wrapper'); return false;">&raquo;</a></li>
        <?php }?>
    </ul>
</nav>


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


    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('EDO_array'), 'bond');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('bond')->value) {
$foreach2DoElse = false;
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

</div><?php }
}
