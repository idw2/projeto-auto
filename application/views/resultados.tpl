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

<section>
    <div class="container">{include file="filtro.tpl"}</div>
</section>

<section id="home">
    <div class="container">

        {*<div class="row introform">
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
                            <option>Boxster</option>
                            <option>BMW GF 54</option>
                            <option>FD 2014</option>
                            <option>AMFR</option>
                            <option>Centra</option>
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
        </div>*}


        {if $controle1}
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-top: 0;">Resultado</h3>
                    <div class="grid">
                        <div class="item-grid">
                            <div class="ribbon red"><span>Novo</span></div>
                            <a class="more" href="/{$language}/carros/detalhes/{$resultados->URL_AMIGAVEL}"><i class="icon-plus"></i></a>
                            <img src="{$resultados->FOTO}" alt="{$resultados->NOME}" title="{$resultados->NOME}">
                            <p>{$resultados->NOME} <span>$ {$resultados->PRECO}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        {else}

            {counter assign=i start=0 print=false} 
            {foreach name=outer item=resultado from=$resultados}
                {assign "total" $i}
                {counter}
            {/foreach}

            {counter assign=i start=0 print=false} 
            {foreach name=outer item=resultado from=$resultados}
                {if $i == 0}
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="margin-top: 0;">Resultados</h3>
                            <div class="grid">
                            {/if}
                            <div class="item-grid">
                                <div class="ribbon red"><span>Novo</span></div>
                                <a class="more" href="/{$language}/carros/detalhes/{$resultado['URL_AMIGAVEL']}"><i class="icon-plus"></i></a>
                                <img src="{$resultado['FOTO']}" alt="{$resultado['NOME']}" title="{$resultado['NOME']}">
                                <p>{$resultado['NOME']} <span>$ {$resultado['PRECO']}</span></p>
                            </div>
                            {if $i == $total}
                            </div>
                        </div>
                    </div>
                {/if}
                {counter}
            {/foreach}
        {/if}
    </div>

</section>

{include file="footer.tpl"}