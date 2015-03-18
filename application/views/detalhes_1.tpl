{include file="header.tpl"}

{*
<div class="veiculo-collage-wrapper">
<div class="veiculo-collage Collage">
{foreach from=$fotos key=key item=foto}
<img src="{$foto->CROP268}" />
{/foreach}
</div>
</div>
*}

<section class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="font-weight: 400;font-size: 3.2rem;margin-bottom: 16px;"><strong>{$veiculo->NOME}</strong> {$veiculo->ANO}</h1>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-8">
            {*<div class="veiculo-slider">
            <ul class="slides">
            {foreach from=$fotos key=key item=foto}
            <li  data-thumb="{$foto->CROP268}">
            <img src="{$foto->CROP770}" />
            </li>
            {/foreach}
            </ul>
            </div>
            {counter assign=i start=0 print=false} 
            {foreach name=outer item=usado from=$usados}
            <div class="item-grid">
            <div class="ribbon red"><span>Novo</span></div>
            <a class="more" href="/{$language}/carros/detalhes/{$usado['URL_AMIGAVEL']}"><i class="icon-plus"></i></a>
            <img src="{$usado['FOTO']}" alt="{$usado['NOME']}" title="{$usado['NOME']}">
            <p>teste{$usado['NOME']} <span>R$ {$usado['PRECO']}</span></p>
            </div>
            {counter}
            {/foreach}
            
            
            *}


            <div class="veiculo-slider flexslider">
                <ul class="slides">
                    {*                    {foreach name=outer item=usado from=$carros}*}
                    <li>
                        <img src="{$carro->ORIGINAL}" />
                    </li>
                    {*                    {/foreach}*}
                </ul>
            </div>
            <div class="veiculo-carousel flexslider">
                <ul class="slides">
                    {*                    {foreach from=$fotos key=key item=foto}*}
                    <li>
{*                        <img src="{$carro->FOTO}" />*}
                    </li>
                    {*                    {/foreach}*}
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="price">{$carro->PRECO}</h2>
                    <form class="ajax-form" action="" method="post">
                        <div class="form-row">
                            <input type="text" class="form-control" placeholder="Nome" required>
                        </div>
                        <div class="form-row">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-row row">
                            <div class="col-xs-4">
                                <input type="tel" class="form-control" placeholder="DDD">
                            </div>
                            <div class="col-xs-8">
                                <input type="tel" class="form-control" placeholder="Telefone">
                            </div>
                        </div>
                        <div class="form-row">
                            <textarea class="form-control" placeholder="Mensagem" style="height: 100px;" required></textarea>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn btn-block btn-primary btn-lg" style="margin: 0">Enviar proposta</button>
                        </div>
                    </form>
                    <hr>

                    <p>{$endereco->LOGRADOURO}, {$endereco->NUMERO}<br>
                        {if $endereco->COMPLEMENTO != "" && !is_array($endereco->COMPLEMENTO)}{$endereco->COMPLEMENTO}<br>{/if}    
                        {$endereco->BAIRRO}<br />
                        {$endereco->CIDADE}/{$endereco->UF}<br />
                        CEP: {$endereco->CEP}</p>
                    <p><a href="" style="font-size: 18px;letter-spacing: 0.04rem;font-weight: bold">{$configuracao->TELEFONE}</a><p>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #f2f2f2;margin-top: 20px;box-shadow: inset 0 2px 6px rgba(0,0,0,0.1);">
    <div class="container">
        <div class="row veiculo-info-panel">
            <div class="col col-sm-2 col-sm-offset-1">
                <p class="text-center">Ano<br>
                    <strong>{$carro->ANO}</strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Km<br>
                    <strong>{$carro->KM}</strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Cor<br>
                    <strong>{$carro->COR}</strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Câmbio<br>
                    <strong>{$carro->CAMBIO}</strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Portas<br>
                    <strong>{$carro->PORTAS}</strong>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 style="margin-top: 30px;">Especificações: </h3>
                <p style="font-size: 1.8rem;font-size:2.4rem;">{$carro->ESPECIFICACOES}</p>
        </div>
    </div>
</section>

{include file="footer.tpl"}