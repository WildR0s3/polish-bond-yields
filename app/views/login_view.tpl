{extends file="main.tpl"}

{block name=main}
        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Wprowadz dane logowania</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Podaj login i haslo<br class="mobile-hide" />
                                    </h2>
                                    <p></p>
                                </header>
                                {* <a href="#" class="image featured">
                                    <img src="images/obligacje.jpg" alt="" />
                                </a> *}
                            
                                <div class="row">
							        <div class="col-6 col-12-medium">
                                    	
                                    <section>
                                            <form method="post" action="{$conf->action_url}login">
                                                <div class="row gtr-50">
                                                    <div class="col-6 col-12-small">
                                                        <input type="text" name="login" id="login" placeholder="twoj login" />
                                                    </div>
                                                    
                                                    <div class="col-6 col-12-small">
                                                        <input type="password" name="password" id="password" placeholder="podaj haslo"/>
                                                    </div>

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="style1" value="Zaloguj" /></li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </form>

                                            <from>
                                            <div class="col-12">
                                                <ul class="actions">
                                                    {* <li  class="style1"><a href="{$conf->action_root}add_user_bond">Dodaj obligacje</a></li> *}
                                                    <a href="{$conf->action_root}register_user"><li><input type="submit" class="style1" value="Zarejestruj sie" /></li></a>
                                                </ul>
                                            </div>
                                             </from>

									    </section>

                                    </div>
                                </div>

                            </article>
                        </div>

                </div>
            </div>

{/block}