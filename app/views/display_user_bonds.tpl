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
                                                <div class="header-column">Aktualne odsetki netto</div>
                                                <div class="header-column">Sumaryczne odsetki netto</div>
                                            </div>
            
                                            {* Smarty will loop through your data here to create rows. *}
                                            {* Example Row (for structure/preview) *}

                                            {foreach $TOS_array as $bond}
                                                
                                                <div class="table-row-grid bond-summary-row" data-target-id="details-{$bond->display_id}">
                                                    <div class="row-cell">{$bond->purchase_date}</div>
                                                    <div class="row-cell">{$bond->bond_type}</div>
                                                    <div class="row-cell">{$bond->value}</div>
                                                    <div class="row-cell">{$bond->net_current_total_interest}</div>
                                                    <div class="row-cell">{$bond->net_total_interest}</div>

                                                    <form method="post" action="{$conf->action_url}edit_user_bonds">
                                                        <input type="hidden" name="id_holding" value={$bond->id_holding}>
                                                        <input type="submit" class="edit-type" value="Edit" /></li>
                                                    </form>
                                                </div>

                                                <div class="bond-detail-row" id="details-{$bond->display_id}">
                                                    <div class="sub-table-container">
                                                        
                                                        <div class="sub-table-header-grid">
                                                            <div class="sub-header-column">Okres</div>
                                                            <div class="sub-header-column">Oprocentowanie (%)</div>
                                                            <div class="sub-header-column">Naliczone odsetki netto</div>
                                                            <div class="sub-header-column">Sumaryczne odsetki netto</div>
                                                            <div class="sub-header-column">Dzienne odsetki</div>
                                                        </div>
                                                        {for $i=0 to $bond->periods - 1}
            
                                                            <div class="sub-table-row-grid">
                                                                <div class="sub-row-cell">Okres {$i + 1}</div>
                                                                <div class="sub-row-cell">{$bond->gross_percentage_returns[$i]} %</div>
                                                                <div class="sub-row-cell">{$bond->net_current_returns[$i]}</div>
                                                                <div class="sub-row-cell">{$bond->net_interests[$i]}</div>
                                                                <div class="sub-row-cell">{$bond->net_daily_period_interest[$i]}</div>
                                                            </div>
                                                    
                                                        {/for}
                                                        
                                                    </div>
                                                </div>

                                            {/foreach}

                                            {foreach $COI_array as $bond}
                                                
                                                <div class="table-row-grid bond-summary-row" data-target-id="details-{$bond->display_id}">
                                                    <div class="row-cell">{$bond->purchase_date}</div>
                                                    <div class="row-cell">{$bond->bond_type}</div>
                                                    <div class="row-cell">{$bond->value}</div>
                                                    <div class="row-cell">{$bond->net_current_total_interest}</div>
                                                    <div class="row-cell">{$bond->net_total_interest}</div>

                                                    <form method="post" action="{$conf->action_url}edit_user_bonds">
                                                        <input type="hidden" name="id_holding" value={$bond->id_holding}>
                                                        <input type="submit" class="edit-type" value="Edit" /></li>
                                                    </form>

                                                </div>

                                                <div class="bond-detail-row" id="details-{$bond->display_id}">
                                                    <div class="sub-table-container">
                                                        
                                                        <div class="sub-table-header-grid">
                                                            <div class="sub-header-column">Okres</div>
                                                            <div class="sub-header-column">Oprocentowanie (%)</div>
                                                            <div class="sub-header-column">Naliczone odsetki netto</div>
                                                            <div class="sub-header-column">Sumaryczne odsetki netto</div>
                                                            <div class="sub-header-column">Dzienne odsetki</div>
                                                        </div>
                                                        {for $i=0 to $bond->periods - 1}
            
                                                            <div class="sub-table-row-grid">
                                                                <div class="sub-row-cell">Okres {$i + 1}</div>
                                                                <div class="sub-row-cell">{$bond->gross_percentage_returns[$i]} %</div>
                                                                <div class="sub-row-cell">{$bond->net_current_returns[$i]}</div>
                                                                <div class="sub-row-cell">{$bond->net_interests[$i]}</div>
                                                                <div class="sub-row-cell">{$bond->net_daily_period_interest[$i]}</div>
                                                            </div>
                                                    
                                                        {/for}

                                                    </div>
                                                </div>

                                            {/foreach}
                                        
                                        </div>


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