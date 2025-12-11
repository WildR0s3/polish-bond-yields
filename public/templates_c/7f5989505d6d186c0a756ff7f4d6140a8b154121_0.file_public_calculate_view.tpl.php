<?php
/* Smarty version 5.4.5, created on 2025-11-22 16:45:55
  from 'file:public_calculate_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6921dab3414a35_04349474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f5989505d6d186c0a756ff7f4d6140a8b154121' => 
    array (
      0 => 'public_calculate_view.tpl',
      1 => 1763826342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6921dab3414a35_04349474 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11432338506921dab340a020_79768480', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_11432338506921dab340a020_79768480 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Przewidywane zwroty</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Twoj zakup wygeneruje nastepujace<br class="mobile-hide" />
                                    zwroty</h2>
                                                                    </header>
                                                            
                        <section id="highlights" class="wrapper style3">
							<div class="row aln-center">
                                    <div class="col-3 col-12-medium">
                                        <section class="highlight alt">
                                            <h3>Bond type</h3>
                                            <p><?php echo $_smarty_tpl->getValue('bond_type');?>
</p>
                                        </section>
                                    </div>
                                    <div class="col-3 col-12-medium">
                                        <section class="highlight alt">
                                            <h3>Amount</h3>
                                            <p><?php echo $_smarty_tpl->getValue('principal');?>
</p>
                                        </section>
                                    </div>
                                    <div class="col-3 col-12-medium">
                                        <section class="highlight alt">
                                            <h3>Interest gained</h3>
                                            <p><?php echo $_smarty_tpl->getValue('interest_gained');?>
</p>
                                        </section>
                                    </div>
                                    <div class="col-3 col-12-medium">
                                        <section class="highlight alt">
                                            <h3>Purchase_date</h3>
                                            <p><?php echo $_smarty_tpl->getValue('purchase_date');?>
</p>
                                        </section>
                                    </div>

                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Period</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Interest rate</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Interest net</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Interest gross</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Interest gained</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Daily interest</h3>
                                        </section>
                                    </div>

                                    <?php
$_smarty_tpl->assign('i', null);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->getValue('i') < 3) {
for ($_foo=true;$_smarty_tpl->getValue('i') < 3; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p>Period <?php echo $_smarty_tpl->getValue('i')+1;?>
</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p><?php echo $_smarty_tpl->getValue('period_fixed_rate');?>
 %</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p><?php echo $_smarty_tpl->getValue('net_interests')[$_smarty_tpl->getValue('i')];?>
</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p><?php echo $_smarty_tpl->getValue('gross_interests')[$_smarty_tpl->getValue('i')];?>
</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p><?php echo $_smarty_tpl->getValue('interest_gained');?>
</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p><?php echo $_smarty_tpl->getValue('daily_net_interests')[$_smarty_tpl->getValue('i')];?>
</p>
                                        </section>
                                    </div>
                                    <?php }
}
?>
                            </section>
                            </article>
                        </div>

                </div>
            </div>

<?php
}
}
/* {/block 'main'} */
}
