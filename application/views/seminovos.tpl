{include file="header.tpl"}

<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Seminovos</h2>
        </div>
    </div>

    <div class="row">
        <div class="container">
            {include file="filtro.tpl"}
        </div>        
    </div>

    <br>

    <div class="row">
        <div class="col-xs-12">
            <div class="col-md-12">
                {if $controle3}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="grid">
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/{$language}/carros/detalhes/{$seminovos->URL_AMIGAVEL}"><i class="icon-plus"></i></a>
                                    <img src="{$seminovos->FOTO}" alt="{$seminovos->NOME}" title="{$seminovos->NOME}">
                                    <p>{$seminovos->NOME} <span>$ {$seminovos->PRECO}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                {else}

                    {counter assign=i start=0 print=false} 
                    {foreach name=outer item=seminovo from=$seminovos}
                        {assign var=total value=$i} 
                        {counter}
                    {/foreach}

                    {counter assign=i start=0 print=false} 
                    {foreach name=outer item=seminovo from=$seminovos}
                        {if $i == 0}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid">
                                    {/if}
                                    <div class="item-grid">
                                        <div class="ribbon red"><span>Novo</span></div>
                                        <a class="more" href="/{$language}/carros/detalhes/{$seminovo['URL_AMIGAVEL']}"><i class="icon-plus"></i></a>
                                        <img src="{$seminovo['FOTO']}" alt="{$zero['NOME']}" title="{$seminovo['NOME']}">
                                        <p>{$seminovo['NOME']} <span>$ {$seminovo['PRECO']}</span></p>
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
        </div>
    </div>

</div>
<div style="clear: both;"></div>

{include file="footer.tpl"}