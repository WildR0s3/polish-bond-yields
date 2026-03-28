{extends file="main.tpl"}

{block name=main}
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
                                {* <a href="#" class="image featured">
                                    <img src="images/obligacje.jpg" alt="" />
                                </a> *}
                            
                                <div class="row">
							        <div class="col-12">
                                    	
                                    <section>

                                        <div class="table-container">
                                            {* The header row *}
                                            <div class="table-header-grid">
                                                <div class="header-column">Data zakupu</div>
                                                <div class="header-column">Typ obligacji</div>
                                                <div class="header-column">Wartosc</div>
                                            </div>

                                            <div class="table-row-grid bond-summary-row" data-target-id="details">
                                                <div class="row-cell">{$edited_bond['purchase_date']}</div>
                                                <div class="row-cell">{$edited_bond['bond_type']}</div>
                                                <div class="row-cell">{$edited_bond['value']}</div>        
                                            </div>
            
                                        </div>
                                        <br>


                                                    {* <div class="col-12">
                                                        <ul class="actions"> *}
                                                        	{* <li  class="style1"><a href="{$conf->action_root}add_user_bond">Dodaj obligacje</a></li> *}
                                                            {* <a href="{$conf->action_root}add_user_bonds"><li><input type="submit" class="style1" value="Dodaj obligacje" /></li></a>
                                                        </ul>
                                                    </div>
                                                </div> *}

                                                                   
                                            <form method="post" action="{$conf->action_url}make_edition">
                                                <div class="row gtr-50">
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <input type="text" name="value" id="value" value={$edited_bond['value']} /> {*placeholder={$edited_bond['value']}*}
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
                                                        <input type="date" name="purchase_date" id="purchase_date" value={$edited_bond['purchase_date']}/>
                                                        <input type="hidden" name="id_holding" value={$edited_bond['id_holding']}>
                                                    </div>

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="style1" value="Zamien" /></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>

                                        <form method="post" action="{$conf->action_url}make_deletion">
                                        <div class="col-12">
                                            <ul class="actions">
                                                <li><input type="submit" class="style1" value="Usun obligacje" /></li>
                                                 <input type="hidden" name="id_holding" value={$edited_bond['id_holding']}>
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

{/block}