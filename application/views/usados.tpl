{include file="header.tpl"}

<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Usados</h2>
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
                {if $controle4}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="grid">
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/{$language}/carros/detalhes/{$usados->URL_AMIGAVEL}"><i class="icon-plus"></i></a>
                                    <img src="{$usados->FOTO}" alt="{$usados->NOME}" title="{$usados->NOME}">
                                    <p>{$usados->NOME} <span>$ {$usados->PRECO}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                {else}

                    {counter assign=i start=0 print=false} 
                    {foreach name=outer item=usado from=$usados}
                        {assign var=total value=$i} 
                        {counter}
                    {/foreach}

                    {counter assign=i start=0 print=false} 
                    {foreach name=outer item=usado from=$usados}
                        {if $i == 0}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid">
                                    {/if}
                                    <div class="item-grid">
                                        <div class="ribbon red"><span>Novo</span></div>
                                        <a class="more" href="/{$language}/carros/detalhes/{$usado['URL_AMIGAVEL']}"><i class="icon-plus"></i></a>
                                        <img src="{$usado['FOTO']}" alt="{$usado['NOME']}" title="{$usado['NOME']}">
                                        <p>{$usado['NOME']} <span>$ {$usado['PRECO']}</span></p>
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