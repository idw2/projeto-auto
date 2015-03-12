{include file="header.tpl"}

<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Novidades</h2>
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

                {if $controle1}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="grid">
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/{$language}/carros/detalhes/{$novidades->URL_AMIGAVEL}"><i class="icon-plus"></i></a>
                                    <img src="{$novidades->FOTO}" alt="{$novidades->NOME}" title="{$novidades->NOME}">
                                    <p>{$novidades->NOME} <span>$ {$novidades->PRECO}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                {else}

                    {counter assign=i start=0 print=false} 
                    {foreach name=outer item=novidade from=$novidades}
                        {assign "total" $i}
                        {counter}
                    {/foreach}

                    {counter assign=i start=0 print=false} 
                    {foreach name=outer item=novidade from=$novidades}
                        {if $i == 0}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid">
                                    {/if}
                                    <div class="item-grid">
                                        <div class="ribbon red"><span>Novo</span></div>
                                        <a class="more" href="/{$language}/carros/detalhes/{$novidade['URL_AMIGAVEL']}"><i class="icon-plus"></i></a>
                                        <img src="{$novidade['FOTO']}" alt="{$novidade['NOME']}" title="{$novidade['NOME']}">
                                        <p>{$novidade['NOME']} <span>$ {$novidade['PRECO']}</span></p>
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