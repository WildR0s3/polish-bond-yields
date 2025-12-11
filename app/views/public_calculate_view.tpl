{extends file="main.tpl"}

{block name=main}
        <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Przewidywane zwroty</div>
                <div class="container">

                    <!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>Twoj zakup wygeneruje nastepujace<br class="mobile-hide" />
                                    zwroty</h2>
                                    {* <p>Najs</p> *}
                                </header>
                                {* <a href="#" class="image featured">
                                    <img src="images/obligacje.jpg" alt="" />
                                </a> *}
                            
                        <section id="highlights" class="wrapper style3">
							<div class="row aln-center">
                                    <div class="col-3 col-12-medium">
                                        <section class="highlight alt">
                                            <h3>Bond type</h3>
                                            <p>{$bond_type}</p>
                                        </section>
                                    </div>
                                    <div class="col-3 col-12-medium">
                                        <section class="highlight alt">
                                            <h3>Amount</h3>
                                            <p>{$principal}</p>
                                        </section>
                                    </div>
                                    <div class="col-3 col-12-medium">
                                        <section class="highlight alt">
                                            <h3>Interest gained</h3>
                                            <p>{$interest_gained}</p>
                                        </section>
                                    </div>
                                    <div class="col-3 col-12-medium">
                                        <section class="highlight alt">
                                            <h3>Purchase_date</h3>
                                            <p>{$purchase_date}</p>
                                        </section>
                                    </div>

                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Period</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Interest rate</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Interest net</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Interest gross</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Interest gained</h3>
                                        </section>
                                    </div>
                                    <div class="col-2 col-12-medium">
                                        <section class="highlight">
                                            <h3>Daily interest</h3>
                                        </section>
                                    </div>

                                    {for $i = 0; $i < 3; $i++}
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p>Period {$i+1}</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p>{$period_fixed_rate} %</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p>{$net_interests[$i]}</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p>{$gross_interests[$i]}</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p>{$interest_gained}</p>
                                        </section>
                                    </div>
                                    <div class="col-2 col-9-medium">
                                        <section class="highlight aln-right">
                                            <p>{$daily_net_interests[$i]}</p>
                                        </section>
                                    </div>
                                    {/for}
                            </section>
                            </article>
                        </div>

                </div>
            </div>

{/block}