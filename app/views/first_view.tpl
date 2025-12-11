{extends file="main.tpl"}

{block name=main}
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
                                            <form method="post" action="{$conf->action_root}calculate">
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

{/block}