{extends file="main.tpl"}

{block name=main}
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
                                            <form method="post" action="{$conf->action_url}add_inflation_reading">
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

{/block}