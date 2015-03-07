{include file="header.tpl"}

<div class="bannercontainer" style="margin-top: -4%;margin-bottom: 4%;">
    <div class="banner ">
        <ul>                        
            <li data-transition="curtain-3" data-slotamount="1">
                <img src="/web-files/img/slider/slider01.jpg" alt="//" />
                <div 
                    class="caption lft " 
                    data-x="center"
                    data-y="bottom"
                    data-speed="1000"
                    data-start="500"
                    data-easing="easeOutBack"
                    >		
                    <a href="#">
                        <p>
                            <span>Oferta especial <span>&nbsp;</span></span>
                            New Fiesta 2015 &gt; A partir de  R$29.990
                        </p>
                    </a>
                </div>                                 
            </li>

            <li data-transition="curtain-3" data-slotamount="1">
                <img src="/web-files/img/slider/slider02.jpg" alt="//" />
                <div 
                    class="caption lft " 
                    data-x="center"
                    data-y="bottom"
                    data-speed="1000"
                    data-start="500"
                    data-easing="easeOutBack"
                    >
                    <a href="#">
                        <p>
                            <span>Oferta especial <span>&nbsp;</span></span>
                            Chevrolet Cruze &gt; A partir de  R$49.990
                        </p>
                    </a>
                </div>  
            </li> 

            <li data-transition="curtain-3" data-slotamount="1">
                <img src="/web-files/img/slider/slider03.jpg" alt="//" />
                <div 
                    class="caption lft " 
                    data-x="center"
                    data-y="bottom"
                    data-speed="1000"
                    data-start="500"
                    data-easing="easeOutBack"
                    >
                    <a href="#">
                        <p>
                            <span>Oferta especial <span>&nbsp;</span></span>
                            Corolla 2014 &gt; A partir de  R$48.990
                        </p>
                    </a>
                </div>                                    
            </li> 
        </ul>
    </div>
</div>

<section id="home">
    <div class="container">

        <div class="row introform">
            <form role="form" class="col-sm-12">
                <div class="col-md-2 col-md-offset-1">
                    <div class="form-group">
                        <label for="model1"><strong>Marca:</strong></label>
                        <select class="form-control" id="model1">
                            <option value="0"></option>
                            <option value="3">Audi</option>
                            <option value="4">BMW</option>
                            <option value="5">Chevrolet</option>
                            <option value="7">Citroen</option>
                            <option value="14">Fiat</option>
                            <option value="15">Ford</option>
                            <option value="16">Honda</option>
                            <option value="17">Hyundai</option>
                            <option value="36">Volkswagen</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="model2"><strong>Modelo:</strong></label>
                        <select class="form-control" id="model2">
                            <option></option>
                            {*<option>Boxster</option>
                            <option>BMW GF 54</option>
                            <option>FD 2014</option>
                            <option>AMFR</option>
                            <option>Centra</option>*}
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="model3"><strong>Ano:</strong></label>
                        <select class="form-control" id="model3">
                            <option></option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
                            <option>2009</option>
                            <option>2008</option>
                            <option>2007</option>
                            <option>2006</option>
                            <option>2005</option>
                            <option>2004</option>
                            <option>2003</option>
                            <option>2002</option>
                            <option>2001</option>
                            <option>2000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="model4"><strong>A partir de: </strong></label>
                        <select class="form-control" id="model4">
                            <option></option>
                            <option>R$20.000</option>
                            <option>R$40.000</option>
                            <option>R$60.000</option>
                            <option>R$80.000</option>
                            <option>R$100.000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="submit"><strong class="advanced">Encontre seu carro:</strong></label>
                    <button type="submit" id="submit" class="src btn bt-sm red">Pesquisar <i class="icon-search"></i></button>
                </div>
            </form>
        </div>

        {if $novidades}                
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-top: 0;">Novidades</h3>
                    <div class="grid">
                        {if $controle1}
                            <div class="item-grid">
                                <div class="ribbon red"><span>Novo</span></div>
                                <a class="more" href="/{$language}/carros/detalhes/{$novidades->URL_AMIGAVEL}"><i class="icon-plus"></i></a>
                                <img src="{$novidades->FOTO}" alt="{$novidades->NOME}" title="{$novidades->NOME}">
                                <p>{$novidades->NOME} <span>R$ {$novidades->PRECO}</span></p>
                            </div>
                        {else}
                            {counter assign=i start=0 print=false} 
                            {foreach name=outer item=novidade from=$novidades}
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/{$language}/carros/detalhes/{$novidade['URL_AMIGAVEL']}"><i class="icon-plus"></i></a>
                                    <img src="{$novidade['FOTO']}" alt="{$novidade['NOME']}" title="{$novidade['NOME']}">
                                    <p>{$novidade['NOME']} <span>R$ {$novidade['PRECO']}</span></p>
                                </div>
                                {counter}
                            {/foreach}
                        {/if}

                    </div>
                </div>
            </div>
        {/if}         
        {if $zeros}
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-top: 20px;">Zero KM</h3>
                    <div class="grid">
                        {if $controle2}
                            <div class="item-grid">
                                <div class="ribbon red"><span>Novo</span></div>
                                <a class="more" href="/{$language}/carros/detalhes/{$zeros->URL_AMIGAVEL}"><i class="icon-plus"></i></a>
                                <img src="{$zeros->FOTO}" alt="{$zeros->NOME}" title="{$zeros->NOME}">
                                <p>{$zeros->NOME} <span>R$ {$zeros->PRECO}</span></p>
                            </div>
                        {else}
                            {counter assign=i start=0 print=false} 
                            {foreach name=outer item=zero from=$zeros}
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/{$language}/carros/detalhes/{$zero['URL_AMIGAVEL']}"><i class="icon-plus"></i></a>
                                    <img src="{$zero['FOTO']}" alt="{$zero['NOME']}" title="{$zero['NOME']}">
                                    <p>{$zero['NOME']} <span>R$ {$zero['PRECO']}</span></p>
                                </div>
                                {counter}
                            {/foreach}
                        {/if} 
                    </div>
                </div>
            </div>
        {/if} 
        {if $seminovos}
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-top: 20px;">Seminovos</h3>
                    <div class="grid">
                        {if $controle3}
                            <div class="item-grid">
                                <div class="ribbon red"><span>Novo</span></div>
                                <a class="more" href="/{$language}/carros/detalhes/{$seminovos->URL_AMIGAVEL}"><i class="icon-plus"></i></a>
                                <img src="{$seminovos->FOTO}" alt="{$seminovos->NOME}" title="{$seminovos->NOME}">
                                <p>{$seminovos->NOME} <span>R$ {$seminovos->PRECO}</span></p>
                            </div>
                        {else}
                            {counter assign=i start=0 print=false} 
                            {foreach name=outer item=seminovo from=$seminovos}
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/{$language}/carros/detalhes/{$seminovo['URL_AMIGAVEL']}"><i class="icon-plus"></i></a>
                                    <img src="{$seminovo['FOTO']}" alt="{$zero['NOME']}" title="{$seminovo['NOME']}">
                                    <p>{$seminovo['NOME']} <span>R$ {$seminovo['PRECO']}</span></p>
                                </div>
                                {counter}
                            {/foreach}
                        {/if}
                    </div>
                </div>
            </div>
        {/if}
        {if $usados}
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-top: 20px;">Usados</h3>
                    <div class="grid">
                        {if $controle4}
                            <div class="item-grid">
                                <div class="ribbon red"><span>Novo</span></div>
                                <a class="more" href="/{$language}/carros/detalhes/{$usados->URL_AMIGAVEL}"><i class="icon-plus"></i></a>
                                <img src="{$usados->FOTO}" alt="{$usados->NOME}" title="{$usados->NOME}">
                                <p>{$usados->NOME} <span>R$ {$usados->PRECO}</span></p>
                            </div>
                        {else}
                            {counter assign=i start=0 print=false} 
                            {foreach name=outer item=usado from=$usados}
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/{$language}/carros/detalhes/{$usado['URL_AMIGAVEL']}"><i class="icon-plus"></i></a>
                                    <img src="{$usado['FOTO']}" alt="{$usado['NOME']}" title="{$usado['NOME']}">
                                    <p>{$usado['NOME']} <span>R$ {$usado['PRECO']}</span></p>
                                </div>
                                {counter}
                            {/foreach}
                        {/if} 
                    </div>
                </div>
            </div>
        {/if}     
        <!-- testimonials -->
        {*<div class="row testimonials">
        <div class="col-sm-12">
        <h2>Quem já comprou</h2>
        <div class="col-md-12">
        <div id="carousel-testimonials" class="carousel slide">
        <!-- Controls -->
        <a class="carousel-control prev" href="#carousel-testimonials" data-slide="prev">
        <i class="icon-left-open-mini"></i>
        </a>
        <a class="carousel-control" href="#carousel-testimonials" data-slide="next">
        <i class="icon-right-open-mini"></i>
        </a>
        <a class="carousel-control all" href="#">Todos</a>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <div class="item active">
        <div class="testimonials-item">
        <span class="ribbon">&nbsp;</span>
        <div class="img"><img src="http://placehold.it/200x200" alt="//"></div>
        <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</em>
        <strong>Marcos Santos</strong>
        </div>

        <div class="testimonials-item">
        <span class="ribbon">&nbsp;</span>
        <div class="img"><img src="http://placehold.it/200x200" alt="//"></div>
        <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</em>
        <strong>Guilherme Santanna</strong>
        </div>
        </div>

        <div class="item">
        <div class="testimonials-item">
        <span class="ribbon">&nbsp;</span>
        <div class="img"><img src="http://placehold.it/200x200" alt="//"></div>
        <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</em>
        <strong>Nair Silva</strong>
        </div>

        <div class="testimonials-item">
        <span class="ribbon">&nbsp;</span>
        <div class="img"><img src="http://placehold.it/200x200" alt="//"></div>
        <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</em>
        <strong>Lucas Moraes</strong>
        </div>
        </div>

        </div>
        </div>		
        </div>
        </div>
        </div>*}
        <!-- end testimonials -->

        <!-- sevices -->
        <div class="row services">
            <div class="col-sm-12">
                <h2>Nossos Serviços</h2>
                <div id="carousel-services" class="carousel slide">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-globe"></span>
                                </div>
                                <strong>Seminovos</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-comment"></span>
                                </div>
                                <strong>Venda seu carro</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <strong>Financiamento</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>
                        </div>


                        <div class="item">

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-globe"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-cog"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-comment"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-screenshot"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-screenshot"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sevices -->
    </div>

</section>

{include file="footer.tpl"}