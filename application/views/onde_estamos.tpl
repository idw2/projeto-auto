{include file="header.tpl"}

<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Onde estamos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="map-frame" style="margin-bottom: 18px;">
                <iframe src="{$onde_estamos}" width="600" height="450" frameborder="0" style="border:0;width: 100%;"></iframe>
            </div>
{*            <p><strong>Telefone:</strong> {$configuracao->TELEFONE}</p>*}
            <p><strong>Endereço:</strong><br />
            {$endereco->LOGRADOURO}, {$endereco->NUMERO}
            {if $endereco->COMPLEMENTO != "" && !is_array($endereco->COMPLEMENTO)}{$endereco->COMPLEMENTO} - {/if}    
            {$endereco->BAIRRO} - {$endereco->CIDADE}/{$endereco->UF}, CEP: {$endereco->CEP}</p>
        </div>
    </div>

</div>
<div style="clear: both;"></div>

{include file="footer.tpl"}