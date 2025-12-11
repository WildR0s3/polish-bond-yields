{extends file="main.tpl"}

{block name=main}
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
                                {* <a href="#" class="image featured">
                                    <img src="images/obligacje.jpg" alt="" />
                                </a> *}
                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="{$conf->action_url}add_bond">
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

{/block}