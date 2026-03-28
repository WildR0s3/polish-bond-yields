<nav class="pagination-container">
    <ul class="pagination-list">
        {if $current_page > 1}
            <li><a href="{$conf->action_root}display_user_bonds?page={$current_page-1}"
                    onclick="ajaxReloadSubPage(this.href, 'ajax-wrapper'); return false;">&laquo;</a></li>
        {/if}
    

        {for $i=1 to $total_pages}
            <li class="{if $current_page == $i}active{/if}">
                <a href="{$conf->action_root}display_user_bonds?page={$i}"
                    onclick="ajaxReloadSubPage(this.href, 'ajax-wrapper'); return false;">{$i}</a>
            </li>
        {/for}

        {if $current_page < $total_pages}
            <li><a href="{$conf->action_root}display_user_bonds?page={$current_page+1}"
                    onclick="ajaxReloadSubPage(this.href, 'ajax-wrapper'); return false;">&raquo;</a></li>
        {/if}
    </ul>
</nav>


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


    {foreach $EDO_array as $bond}
        
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