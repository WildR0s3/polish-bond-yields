<?php
/* Smarty version 5.4.5, created on 2025-12-02 19:14:07
  from 'file:add_inflation_reading_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_692f2c6f4b6850_60469503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c052f5b77dcae73ae67a2e41ce9d19a0eb3937f' => 
    array (
      0 => 'add_inflation_reading_view.tpl',
      1 => 1764699244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692f2c6f4b6850_60469503 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1195683946692f2c6f4b3cf5_09409165', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_1195683946692f2c6f4b3cf5_09409165 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\polish_bond_yields\\app\\views';
?>

        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Odczyt inflacji</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Wprowadz odczyt inflacji<br class="mobile-hide" />
                                    </h2>
                                    <p></p>
                                </header>
                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
add_inflation_reading">
                                                <div class="row gtr-50">
                                                    

                                                    <div class="col-12 col-12-small">
                                                        <input type="text" name="reading_value" id="reading_value" placeholder="stopa inflacji (%)" />
                                                    </div>

                                                    <div class="col-12 col-12-small">
                                                        <label for="reading_date">Data odczytu inflacji</label>
                                                        <input id="reading_date" type="date" name="reading_date"/>
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
