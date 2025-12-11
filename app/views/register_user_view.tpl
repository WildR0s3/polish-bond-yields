{extends file="main.tpl"}

{block name=main}
        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Wprowadz nowego uzytkownika</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Podaj dane<br class="mobile-hide" />
                                    </h2>
                                    <p></p>
                                </header>
                                {* <a href="#" class="image featured">
                                    <img src="images/obligacje.jpg" alt="" />
                                </a> *}
                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="{$conf->action_url}register_new_user">
                                                <div class="row gtr-50">
                                                    <div class="col-6 col-12-small">
                                                        <input type="text" name="login" id="login" placeholder="nazwa uzytkownika" />
                                                    </div>
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <input type="password" name="password" id="password" placeholder="haslo uzytkownika"/>
                                                    </div>

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="style1" value="Zarejestruj" /></li>
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