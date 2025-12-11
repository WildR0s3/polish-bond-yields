{extends file="main.tpl"}

{block name=main}
        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Stopa referencyjna</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Wprowadz stope referencyjna<br class="mobile-hide" />
                                    </h2>
                                    <p></p>
                                </header>
                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="{$conf->action_url}add_reference_rate">
                                                <div class="row gtr-50">
                                                    

                                                    <div class="col-12 col-12-small">
                                                        <input type="text" name="reference_rate_value" id="reference_rate_value" placeholder="stopa referencyjna (%)" />
                                                    </div>

                                                    <div class="col-12 col-12-small">
                                                        <label for="reference_rate_date">Data stopy referencyjnej</label>
                                                        <input id="reference_rate_date" type="date" name="reference_rate_date"/>
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