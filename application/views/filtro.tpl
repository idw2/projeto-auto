
<div style="margin: 40px auto;" role="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">COMPRAR</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">VENDER</a></li>
            {*<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">COMPARAR COM 0 KM</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">TABELA FIPE</a></li>*}
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home">

            <form name="formCrossBuscaCompra" method="post" action="/{$language}/carros/resultados/"> 

                <div class="row">
                    <div class="cl col-md-12" style="margin-bottom: 2%;">
                        <h3 class="subtitulo">Find your next car HERE</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="cl col-md-12">
                        <div class="icr-inline-group">
                            <div class="icr-group">
                                <div class="icr-checkbox">
                                    <label>
                                        <input id="anunciosNovosComprar" name="0km" type="checkbox" value="Zero KM" checked="">
                                        <span>0km</span>
                                    </label>
                                </div>
                                <div class="icr-checkbox">
                                    <label>
                                        <input id="anunciosUsadosComprar" name="seminovos" type="checkbox" value="Usado" checked="">
                                        <span>Seminovos</span>
                                    </label>
                                </div>
                                <div class="icr-checkbox">
                                    <label>
                                        <input id="anunciosUsadosComprar" name="usados" type="checkbox" value="Seminovos" checked="">
                                        <span>Usados</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-2">
                                <label class="icr-label" for="fabricanteComprar">Marca</label>
                            </div>
                            <div class="cl col-md-10">
                                <select  id="marcaComprar" name="fabricante" class="icr-input icr-slt marca_modelo" >
                                    <option value="">&nbsp;</option>
                                    {counter assign=i start=0 print=false}
                                    {foreach name=outer item=fabricante from=$fabricantes}
                                        <option value="{$fabricante['NOME']}" {if $fabricante == $fabricante['NOME']}selected{/if}>{$fabricante['NOME']}</option>
                                        {counter}
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-2">
                                <label class="icr-label" for="modeloComprar">Modelo</label>
                            </div>
                            <div class="cl col-md-10">
                                <select name="modelo" class="icr-input icr-slt marca_modelo">
                                    <option value="">&nbsp;</option>
                                    <option value="Utilitário comercial">Utilitário comercial</option>
                                    <option value="Esportivo e conversível">Esportivo e conversível</option>
                                    <option value="Utilitário esportivo (SUV)">Utilitário esportivo (SUV)</option>
                                    <option value="Picape">Picape</option>
                                    <option value="Perua (station wagon)">Perua (station wagon)</option>
                                    <option value="Monovolume e minivan">Monovolume e minivan</option>
                                    <option value="Sedãs grandes">Sedãs grandes</option>
                                    <option value="Sedã médio">Sedã médio</option>
                                    <option value="Sedã compacto">Sedã compacto</option>
                                    <option value="Hatch médio e esportivo">Hatch médio e esportivo</option>
                                    <option value="Hatch compacto">Hatch compacto</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-2">
                                <label class="icr-label" for="anoinicial">Ano</label>
                            </div>
                            <div class="cl col-md-5">
                                <select id="anomodeloinicial" name="anoinicial" size="1" class="icr-input icr-slt">
                                    <option value="">de</option>
                                    {for $i = 2016; $i >= 1929; $i--}
                                        <option value="{$i}">{$i}</option>
                                    {/for}
                                </select>
                            </div>
                            <div class="cl col-md-5">
                                <select id="anomodelofinal" name="anofinal" size="1" class="icr-input icr-slt ano_preco">
                                    <option value="">até</option>
                                    {for $i = 2016; $i >= 1929; $i--}
                                        <option value="{$i}">{$i}</option>
                                    {/for}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-2">
                                <label class="icr-label esquerda" for="precoinicial">Preço</label>
                            </div>
                            <div class="cl col-md-5">
                                <select id="precominimo" name="precoinicial" size="1" class="icr-input icr-slt">
                                    <option value="">de</option>

                                    <option value="400000">de R$ 4 mil</option>

                                    <option value="600000">de R$ 6 mil</option>

                                    <option value="800000">de R$ 8 mil</option>

                                    <option value="1000000">de R$ 10 mil</option>

                                    <option value="1200000">de R$ 12 mil</option>

                                    <option value="1400000">de R$ 14 mil</option>

                                    <option value="1600000">de R$ 16 mil</option>

                                    <option value="1800000">de R$ 18 mil</option>

                                    <option value="2000000">de R$ 20 mil</option>

                                    <option value="2200000">de R$ 22 mil</option>

                                    <option value="2400000">de R$ 24 mil</option>

                                    <option value="2600000">de R$ 26 mil</option>

                                    <option value="2800000">de R$ 28 mil</option>

                                    <option value="3000000">de R$ 30 mil</option>

                                    <option value="3500000">de R$ 35 mil</option>

                                    <option value="4000000">de R$ 40 mil</option>

                                    <option value="4500000">de R$ 45 mil</option>

                                    <option value="5000000">de R$ 50 mil</option>

                                    <option value="6000000">de R$ 60 mil</option>

                                    <option value="7000000">de R$ 70 mil</option>

                                    <option value="8000000">de R$ 80 mil</option>

                                    <option value="9000000">de R$ 90 mil</option>

                                    <option value="10000000">de R$ 100 mil</option>

                                    <option value="12000000">de R$ 120 mil</option>

                                    <option value="15000000">de R$ 150 mil</option>

                                    <option value="20000000">de R$ 200 mil</option>

                                </select>
                            </div>
                            <div class="cl col-md-5">
                                <select id="precomaximo" name="precofinal" size="1" class="icr-input icr-slt ano_preco">
                                    <option value="">até</option>

                                    <option value="400000">até R$ 4 mil</option>

                                    <option value="600000">até R$ 6 mil</option>

                                    <option value="800000">até R$ 8 mil</option>

                                    <option value="1000000">até R$ 10 mil</option>

                                    <option value="1200000">até R$ 12 mil</option>

                                    <option value="1400000">até R$ 14 mil</option>

                                    <option value="1600000">até R$ 16 mil</option>

                                    <option value="1800000">até R$ 18 mil</option>

                                    <option value="2000000">até R$ 20 mil</option>

                                    <option value="2200000">até R$ 22 mil</option>

                                    <option value="2400000">até R$ 24 mil</option>

                                    <option value="2600000">até R$ 26 mil</option>

                                    <option value="2800000">até R$ 28 mil</option>

                                    <option value="3000000">até R$ 30 mil</option>

                                    <option value="3500000">até R$ 35 mil</option>

                                    <option value="4000000">até R$ 40 mil</option>

                                    <option value="4500000">até R$ 45 mil</option>

                                    <option value="5000000">até R$ 50 mil</option>

                                    <option value="6000000">até R$ 60 mil</option>

                                    <option value="7000000">até R$ 70 mil</option>

                                    <option value="8000000">até R$ 80 mil</option>

                                    <option value="9000000">até R$ 90 mil</option>

                                    <option value="10000000">até R$ 100 mil</option>

                                    <option value="12000000">até R$ 120 mil</option>

                                    <option value="15000000">até R$ 150 mil</option>

                                    <option value="20000000">até R$ 200 mil</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="cl col-sm-12">
                        <div class="row">
                            <div class="cl col-sm-5 col-sm-offset-1" style="margin-top: 10px;">
                                <img src="/web-files/img/search.png" style="width: 22px;"> <span style="font-size: 17px; color: #4a4a4a; font-family: 'Open Sans', 'sans-serif';   padding-right: 9px;" id="cidadeAbertoTexto">Search Location - Orlando - FL</span>
                                <a style="font-size: 16px;"  href="javascript:void(0);" onclick="$('.toggle_location').toggle();" title="Alterar cidade">change</a>
                            </div>
                            <div class="cl col-sm-6">
                                <div class="pull-right">
                                    <button type="submit" class="icr-btn icr-btn-redondo icr-btn-xl icr-btn-laranja">
                                        <span>SEARCH</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="toggle_location" style="display:none;">
                    <div class="icr-inline-group">
                        <div class="icr-group">
                            <label class="icr-label" for="cidade">Cidade</label>
                            <input id="cidade" name="cidadeaberto" type="text" class="icr-input ui-autocomplete-input" placeholder="CEP ou Cidade" data-label="Cidade" data-value="Ex: São Paulo" icc-autocompleteonselectfunction="setLocalizacaoCrossAutoComplete" icc-autocomplete="/rest/search/city/" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                        </div>
                    </div>
                </div>     

            </form>




        </div>
        <div role="tabpanel" class="tab-pane fade" id="profile">

            <form accept-charset="UTF-8" id="venderform" action="">
                <input type="hidden"id="site" name="site" maxlength="40" value="{$site}"/>
                <input type="hidden"id="email_recipiente" name="email_recipiente" maxlength="40" value="{$configuracao->EMAIL_FALECONOSCO}"/>
                <input type="hidden"id="alias" name="alias" maxlength="40" value="{if !is_array($configuracao->ALIAS)}{$configuracao->ALIAS}{/if}"/>
                <input type="hidden" name="endo_id" value="38">
                <div class="row">
                    <div class="cl col-md-12" style="margin-bottom: 2%;">
                        <h3 class="subtitulo">Venda seu carro em nosso Site</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-3">
                                <label class="icr-label" for="fabricanteComprar">Fabricante</label>
                            </div>
                            <div class="cl col-md-9">
                                <select name="fabricante" id="fabricante" class="icr-input marca_modelo">
                                    <option value="">Fabricante</option>
                                    {counter assign=i start=0 print=false}
                                    {foreach name=outer item=fabricante_vender from=$fabricantes_vender}
                                        <option value="{$fabricante_vender['NOME']}" {if $fabricante_vender == $fabricante_vender['NOME']}selected{/if}>{$fabricante_vender['NOME']}</option>
                                        {counter}
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-2">
                                <label class="icr-label" for="modeloComprar">Modelo</label>
                            </div>
                            <div class="cl col-md-10">
                                <select name="modelo" class="icr-input icr-slt marca_modelo">
                                    <option value="">Modelo</option>
                                    <option value="Utilitário comercial">Utilitário comercial</option>
                                    <option value="Esportivo e conversível">Esportivo e conversível</option>
                                    <option value="Utilitário esportivo (SUV)">Utilitário esportivo (SUV)</option>
                                    <option value="Picape">Picape</option>
                                    <option value="Perua (station wagon)">Perua (station wagon)</option>
                                    <option value="Monovolume e minivan">Monovolume e minivan</option>
                                    <option value="Sedãs grandes">Sedãs grandes</option>
                                    <option value="Sedã médio">Sedã médio</option>
                                    <option value="Sedã compacto">Sedã compacto</option>
                                    <option value="Hatch médio e esportivo">Hatch médio e esportivo</option>
                                    <option value="Hatch compacto">Hatch compacto</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-3">
                                <label class="icr-label" for="fabricanteComprar">Ano</label>
                            </div>
                            <div class="cl col-md-9">
                                <select id="anomodeloinicialVender" name="ano" size="1" class="icr-input icr-slt" >
                                    <option value="">Ano</option>
                                    {for $i = 2016; $i >= 1929; $i--}
                                        <option value="{$i}">{$i}</option>
                                    {/for}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-2">
                                <label class="icr-label" for="modeloComprar">Versão</label>
                            </div>
                            <div class="cl col-md-10">
                                <select id="versaoVender" name="versao" class="icr-input icr-slt marca_modelo">
                                    <option value="">Versão</option>
                                    {for $i = 2016; $i >= 1929; $i--}
                                        <option value="{$i}">{$i}</option>
                                    {/for}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-3">
                                <label class="icr-label" for="fabricanteComprar">E-mail</label>
                            </div>
                            <div class="cl col-md-9">
                                <input type="text" id="email" name="email" data-nav="email" class="icr-input" >
                            </div>
                        </div>
                    </div>
                    <div class="cl col-md-6">
                        <div class="row">
                            <div class="cl col-md-2">

                            </div>
                            <div class="cl col-md-5">

                            </div>
                            <div class="cl col-md-5">
                                <button type="button" id="btn-send-vender" class="icr-btn icr-btn-redondo icr-btn-xl icr-btn-laranja">
                                    <span class="ui-button-text">VENDER</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
