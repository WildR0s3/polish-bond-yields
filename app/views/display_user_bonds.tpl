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
                            
                                <div class="row">
							        <div class="col-12">
                                    	
                                    <section>

                                    {block name='content'}
                                        <div id="ajax-wrapper">
                                            {include file="display_user_bonds_partial.tpl"}
                                        </div>
                                    {/block}

                                                    <div class="col-12">
                                                        <ul class="actions">
                                                        	{* <li  class="style1"><a href="{$conf->action_root}add_user_bond">Dodaj obligacje</a></li> *}
                                                            <a href="{$conf->action_root}add_user_bonds"><li><input type="submit" class="style1" value="Dodaj obligacje" /></li></a>
                                                        </ul>
                                                    </div>
                                                </div>
                                            
									</section>

                                    </div>
                                </div>

                            </article>
                        </div>

                </div>
            </div>

{/block}