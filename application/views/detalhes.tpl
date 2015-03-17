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
            <h1 style="font-weight: 400;font-size: 3.2rem;margin-bottom: 16px;"><strong>{$carro->NOME}</strong> {$carro->ANO}</h1>
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
                    {foreach from=$fotos key=key item=foto}
                        {if !is_array($foto['CROPH1440'])}
                            <li><img src="{$foto['CROPH1440']}" /></li>
                            {/if}
                        {/foreach}
                </ul>
            </div>
            <div class="veiculo-carousel flexslider">
                <ul class="slides">
                    {foreach from=$fotos key=key item=foto}
                        {if !is_array($foto['CROP268'])}
                            <li style="margin-right: 10px"><img src="{$foto['CROP268']}" /></li>
                            {/if}
                        {/foreach}
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="price">R${$carro->PRECO}</h2>
                    <form class="ajax-form" action="" method="post">                  
                        <input type="hidden"id="site" name="site" maxlength="40" value="{$site}"/>
                        <input type="hidden"id="email_recipiente" name="email_recipiente" maxlength="40" value="{$configuracao->EMAIL_FALECONOSCO}"/>
                        <input type="hidden"id="alias" name="alias" maxlength="40" value="{if !is_array($configuracao->ALIAS)}{$configuracao->ALIAS}{/if}"/>
                        <div class="form-row">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                        </div>
                        <div class="form-row">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-row row">
                            <div class="col-xs-4">
                                <input type="tel" class="form-control" id="ddd" name="ddd" placeholder="DDD">
                            </div>
                            <div class="col-xs-8">
                                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                            </div>
                        </div>
                        <div class="form-row">
                            <textarea class="form-control" placeholder="Mensagem" id="mensagem" name="mensagem" style="height: 100px;" required></textarea>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-block btn-primary btn-lg" id="btn-send-proposta" style="margin: 0">Enviar proposta</button><span id="visualizar"></span>
                        </div>
                    </form>
                    <hr>

                    <p style='line-height: 2.2em;'>{$endereco->LOGRADOURO}, {$endereco->NUMERO}<br>
                        {if $endereco->COMPLEMENTO != "" && !is_array($endereco->COMPLEMENTO)}{$endereco->COMPLEMENTO}<br>{/if}    
                        {$endereco->BAIRRO}<br />
                        {$endereco->CIDADE}/{$endereco->UF}<br />
                        CEP: {$endereco->CEP}</p>
                    <p><a href="" style="font-size: 24px;letter-spacing: 0.04rem;font-weight: bold">{$configuracao->TELEFONE}</a><p>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #f2f2f2;margin-top: 20px;box-shadow: inset 0 2px 6px rgba(0,0,0,0.1); padding-top: 15px; min-height: 90px;">

    <div class="container">
        <div class="row veiculo-info-panel">
            <div class="col col-sm-2 col-sm-offset-1">
                <p class="text-center">Ano<br>
                    <strong class="info-destaque">{if $carro->ANO != 'Array'}{$carro->ANO}{/if}</strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Km<br>
                    <strong class="info-destaque">{if $carro->KM != 'Array'}{$carro->KM}{/if}</strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Cor<br>
                    <strong class="info-destaque">{if $carro->COR != 'Array'}{$carro->COR}{/if}</strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Câmbio<br>
                    <strong class="info-destaque">{if $carro->CAMBIO != 'Array'}{$carro->CAMBIO}{/if}</strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Portas<br>
                    <strong class="info-destaque">{if $carro->PORTAS != 'Array'}{$carro->PORTAS}{/if}</strong>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sectionbackground">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h4 style="margin-top: 30px;">Observações: </h3>
                    <p>{$carro->ESPECIFICACOES}</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">{include file="filtro.tpl"}</div>
</section>

<script>
    $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
        $('#myTab a[href="#profile"]').tab('show') // Select tab by name
        $('#myTab a:first').tab('show') // Select first tab
        $('#myTab a:last').tab('show') // Select last tab
        $('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)
    })
</script>

{include file="footer.tpl"}