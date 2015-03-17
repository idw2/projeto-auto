
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

            <h3 class="subtitulo">Find your next car HERE</h3>
            <form name="formCrossBuscaCompra" method="post" action="/{$language}/carros/resultados/">  
                <table class="form" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td colspan="4">
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
                            </td>
                        </tr>
                        <tr>
                            <td class="label"><label class="icr-label" for="fabricanteComprar">Fabricante</label></td>
                            <td class="input">

                                <select  id="marcaComprar" name="fabricante" class="icr-input icr-slt marca_modelo" >
                                    <option value="">&nbsp;</option>
                                    {counter assign=i start=0 print=false}
                                    {foreach name=outer item=fabricante from=$fabricantes}
                                        <option value="{$fabricante['NOME']}" {if $fabricante == $fabricante['NOME']}selected{/if}>{$fabricante['NOME']}</option>
                                        {counter}
                                    {/foreach}
                                </select>
                            </td>
                            <td class="label"><label class="icr-label" for="modeloComprar">Modelo</label></td>
                            <td class="input">
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
                            </td>
                        </tr>
                        <tr>
                            <td class="label"><label class="icr-label" for="anoinicial">Ano</label></td>
                            <td class="input">
                                <ul class="listahorizontal">
                                    <li class="esquerda ano_preco">
                                        <select id="anomodeloinicial" name="anoinicial" size="1" class="icr-input icr-slt">
                                            <option value="">de</option>
                                            {for $i = 2016; $i >= 1929; $i--}
                                                <option value="{$i}">{$i}</option>
                                            {/for}


                                        </select>
                                    </li>
                                    <li class="direita ultimo">
                                        <select id="anomodelofinal" name="anofinal" size="1" class="icr-input icr-slt direita ano_preco">
                                            <option value="">até</option>

                                            {for $i = 2016; $i >= 1929; $i--}
                                                <option value="{$i}">{$i}</option>
                                            {/for}

                                        </select>
                                    </li>
                                </ul>
                            </td>
                            <td class="label"><label class="icr-label esquerda" for="precoinicial">Ano</label></td>
                            <td class="input">
                                <ul class="listahorizontal">
                                    <li class="esquerda ano_preco">
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
                                    </li>
                                    <li class="direita ano_preco ultimo">
                                        <select id="precomaximo" name="precofinal" size="1" class="icr-input icr-slt direita ano_preco">
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
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="toggle_location" style="display:block">
                                    <span class="icones icone-alvo"></span>
                                    <b class="iconicstroke-target"></b> <span style="font-size: 12px; color: #4a4a4a; font-family: 'Open Sans', 'sans-serif'; " id="cidadeAbertoTexto">Search Location - Orlando - FL</span>
                                    <span><a style="font-size: 12px;"  href="javascript:void(0);" onclick="$('.toggle_location').toggle();" title="Alterar cidade">alterar cidade</a></span>
                                </div>
                                <div class="toggle_location" style="display:none;">
                                    <div class="icr-inline-group">
                                        <div class="icr-group">
                                            <label class="icr-label" for="cidade">Cidade</label>
                                            <input id="cidade" name="cidadeaberto" type="text" class="icr-input ui-autocomplete-input" placeholder="CEP ou Cidade" data-label="Cidade" data-value="Ex: São Paulo" icc-autocompleteonselectfunction="setLocalizacaoCrossAutoComplete" icc-autocomplete="/rest/search/city/" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="direita2">
                                    <button type="submit" class="icr-btn icr-btn-redondo icr-btn-xl icr-btn-laranja">
                                        <span>SEARCH</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">

                                <div class=" informacoes_busca">
                                    <div class="clearfix modelos_mais_buscados">
                                        {*<ul class="listahorizontal">
                                        <li class="primeiro"><strong>Modelos mais buscados:</strong></li>







                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/fiat/palio" title="Comprar Fiat Palio&nbsp;no Rio de Janeiro - RJ">
                                        <span>Palio</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/volkswagen/gol" title="Comprar Volkswagen Gol&nbsp;no Rio de Janeiro - RJ">
                                        <span>Gol</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/toyota/corolla" title="Comprar Toyota Corolla&nbsp;no Rio de Janeiro - RJ">
                                        <span>Corolla</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/honda/civic" title="Comprar Honda Civic&nbsp;no Rio de Janeiro - RJ">
                                        <span>Civic</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/chevrolet/celta" title="Comprar Chevrolet Celta&nbsp;no Rio de Janeiro - RJ">
                                        <span>Celta</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/volkswagen/fox" title="Comprar Volkswagen Fox&nbsp;no Rio de Janeiro - RJ">
                                        <span>Fox</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/chevrolet/s10-cabine-dupla" title="Comprar Chevrolet S10 Cabine Dupla&nbsp;no Rio de Janeiro - RJ">
                                        <span>S10 Cabine Dupla</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/ford/ecosport" title="Comprar Ford Ecosport&nbsp;no Rio de Janeiro - RJ">
                                        <span>Ecosport</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/fiat/uno" title="Comprar Fiat Uno&nbsp;no Rio de Janeiro - RJ">
                                        <span>Uno</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/hyundai/hb20" title="Comprar Hyundai HB20&nbsp;no Rio de Janeiro - RJ">
                                        <span>HB20</span>
                                        </a>
                                        </li>



                                        <li class="">
                                        <a href="/comprar/rio-de-janeiro-rj/fiat/strada" title="Comprar Fiat Strada&nbsp;no Rio de Janeiro - RJ">
                                        <span>Strada</span>
                                        </a>
                                        </li>



                                        <li class="ultimo">
                                        <a href="/comprar/rio-de-janeiro-rj/volkswagen/golf" title="Comprar Volkswagen Golf&nbsp;no Rio de Janeiro - RJ">
                                        <span>Golf</span>
                                        </a>
                                        </li>

                                        </ul>*}
                                    </div>
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>

            </form>

        </div>
        <div role="tabpanel" class="tab-pane fade" id="profile">

            <h3 style="margin-bottom: 25px;" class="subtitulo">Venda seu carro no maior site de carros do Brasil</h3>
            <form accept-charset="UTF-8" id="venderform" action="">
                <input type="hidden"id="site" name="site" maxlength="40" value="{$site}"/>
                <input type="hidden"id="email_recipiente" name="email_recipiente" maxlength="40" value="{$configuracao->EMAIL_FALECONOSCO}"/>
                <input type="hidden"id="alias" name="alias" maxlength="40" value="{if !is_array($configuracao->ALIAS)}{$configuracao->ALIAS}{/if}"/>
                <input type="hidden" name="endo_id" value="38">

                <table id="formCrossVender" class="form" cellpadding="0" cellspacing="0" border="0">
                    <tbody><tr>
                            <td class="label"><label class="icr-label">Fabricante</label></td>
                            <td class="input">
                                <select name="fabricante" id="fabricante" class="icr-input marca_modelo">
                                    <option value="">Fabricante</option>
                                    {counter assign=i start=0 print=false}
                                    {foreach name=outer item=fabricante_vender from=$fabricantes_vender}
                                        <option value="{$fabricante_vender['NOME']}" {if $fabricante_vender == $fabricante_vender['NOME']}selected{/if}>{$fabricante_vender['NOME']}</option>
                                        {counter}
                                    {/foreach}</select>
                            </td>
                            <td class="label"><label class="icr-label">Modelo</label></td>
                            <td class="input">
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
                            </td>
                        </tr>
                        <tr>
                            <td class="label"><label class="icr-label">Ano</label></td>
                            <td class="input">
                                <ul class="listahorizontal">
                                    <li class="esquerda ano_preco">
                                        <select id="anomodeloinicialVender" name="ano" size="1" class="icr-input icr-slt" >
                                            <option value="">Ano</option>
                                            {for $i = 2016; $i >= 1929; $i--}
                                                <option value="{$i}">{$i}</option>
                                            {/for}
                                        </select>
                                    </li>

                                </ul>
                            </td>
                            <td class="label"><label class="icr-label">Versao</label></td>
                            <td class="input">
                                <select id="versaoVender" name="versao" class="icr-input icr-slt marca_modelo">
                                    <option value="">Versão</option>
                                    {for $i = 2016; $i >= 1929; $i--}
                                        <option value="{$i}">{$i}</option>
                                    {/for}
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label"><label class="icr-label">Email</label></td>
                            <td colspan="3">
                                <input style="width:54%;" type="text" id="email" name="email" data-nav="email" class="icr-input" >
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="direita">
                                    <button type="button" id="btn-send-vender" class="icr-btn icr-btn-redondo icr-btn-xl icr-btn-laranja">
                                        <span class="ui-button-text">vender</span>
                                    </button>

                                </div>
                                <div id="msg-vender"></div>
                            </td>
                        </tr>
                    </tbody></table>
            </form>


        </div>

        {*        <div role="tabpanel" class="tab-pane fade" id="messages">
        <h3 class="subtitulo">Pesquise e compare carros 0km</h3>
        <form id="formCrossComparar" action="" method="GET" onsubmit="return checkActionCrossCompararForm();">

        <input type="hidden" name="endo_id" value="37">

        <table class="form" cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
        <td class="label">
        <label class="icr-label" for="marcaCompare">Marca</label>
        </td>
        <td class="input">
        <select name="marca" id="marcaCompare" class="icr-input icr-slt" onchange="preencherModelosEmLinhaByMarca(this, MM_findObj('modeloCompare'));" defaultvalue="">
        <option value="0">Selecione a marca</option>
        <optgroup label=""><option value="3">Audi</option><option value="4">BMW</option><option value="5">Chevrolet</option><option value="7">Citroen</option><option value="14">Fiat</option><option value="15">Ford</option><option value="16">Honda</option><option value="17">Hyundai</option><option value="20">Kia</option><option value="26">Mercedes Benz</option><option value="27">Mitsubishi</option><option value="28">Nissan</option><option value="29">Peugeot</option><option value="31">Renault</option><option value="35">Toyota</option><option value="36">Volkswagen</option></optgroup><optgroup label="&nbsp;"><option value="99">Aston Martin</option><option value="104">Bentley</option><option value="88">Changan (Chana)</option><option value="100">Chery</option><option value="6">Chrysler</option><option value="12">Dodge</option><option value="91">Effa</option><option value="13">Ferrari</option><option value="246">Geely</option><option value="93">Hafei Towner</option><option value="244">Haima</option><option value="71">Iveco</option><option value="228">JAC</option><option value="18">Jaguar</option><option value="19">Jeep</option><option value="96">Jinbei Topic</option><option value="52">Lamborghini</option><option value="22">Land Rover</option><option value="23">Lexus</option><option value="106">Lifan</option><option value="86">Mahindra</option><option value="24">Maserati</option><option value="229">MG</option><option value="56">MINI</option><option value="30">Porsche</option><option value="241">Rely</option><option value="238">Rolls-Royce</option><option value="236">Shineray</option><option value="61">Smart</option><option value="41">SsangYong</option><option value="33">Subaru</option><option value="34">Suzuki</option><option value="107">TAC</option><option value="47">Troller</option><option value="38">Volvo</option></optgroup><optgroup label="&nbsp;"><option value="40">Outras</option></optgroup>
        </select>
        </td><td class="label">
        <label class="icr-label" for="modeloCompare">Modelo</label>
        </td>
        <td class="input">
        <select name="modelo" id="modeloCompare" class="icr-input icr-slt" onfocus="verifyStaleModelosComAnuncios(MM_findObj('marcaCompare'), this)">
        <option value="0">

        </option>
        </select>
        </td>
        </tr>
        <tr>
        <td colspan="4">
        <div class="direita2"> 
        Teste
        <button type="submit" class="icr-btn icr-btn-redondo icr-btn-xl icr-btn-laranja">
        <span>Search</span>
        </button> 
        </div>
        </td>
        </tr>
        </tbody></table>
        </form>  

        </div>
        <div role="tabpanel" class="tab-pane fade" id="settings">


        <h3 class="subtitulo">Avalie seu carro e receba o resultado na hora</h3>
        <form id="formCrossAvaliar" method="POST" action="/tabela-fipe/resultado.jsp" onsubmit="return validarCrossAvaliarForm();">

        <input type="hidden" name="endo_id" value="981">

        <table class="form" cellpadding="0" cellspacing="0" border="0">
        <tbody>
        <tr>
        <td colspan="4">
        <div class="esqerda">
        <ul class="listahorizontal">
        <li>
        <div class="icr-radio">
        <label>
        <input id="meucarro" name="valorselecionado" type="radio" value="meucarro" class="radio" checked="">
        <span style="font-size: 14px;">Meu carro</span>
        </label>
        </div>
        </li>
        <li>
        <div class="icr-radio">
        <label>
        <input id="carrodesejado" name="valorselecionado" type="radio" value="carrodesejado" class="radio">
        <span style="font-size: 14px;" >Carro desejado</span>
        </label>
        </div>
        </li>
        </ul>
        <div class="lineclearer">&nbsp;</div>
        </div>
        </td>
        </tr>
        <tr>
        <td valign="middle" class="label"><label class="icr-label" for="marcaComprar">Marca</label></td>
        <td class="input">
        <select class="icr-input input_avaliar" size="1" id="marcaAvaliar" name="marca" onchange="preencherModelosByMarca(this, MM_findObj('modeloAvaliar'), MM_findObj('versao'), MM_findObj('anoModelo'), MM_findObj('anoModelo'));" icr-error-message="Marca">
        <option value="">Marca</option>
        <optgroup label=""><option value="3">Audi</option><option value="4">BMW</option><option value="5">Chevrolet</option><option value="7">Citroen</option><option value="14">Fiat</option><option value="15">Ford</option><option value="16">Honda</option><option value="17">Hyundai</option><option value="20">Kia</option><option value="26">Mercedes Benz</option><option value="27">Mitsubishi</option><option value="28">Nissan</option><option value="29">Peugeot</option><option value="31">Renault</option><option value="35">Toyota</option><option value="36">Volkswagen</option></optgroup><optgroup label="&nbsp;"><option value="53">Acura</option><option value="1">Alfa Romeo</option><option value="2">Asia</option><option value="99">Aston Martin</option><option value="104">Bentley</option><option value="108">Buick</option><option value="94">Cadillac</option><option value="230">Carver Concept</option><option value="88">Changan (Chana)</option><option value="100">Chery</option><option value="6">Chrysler</option><option value="97">CN Auto</option><option value="66">Crosslander</option><option value="10">Daewoo</option><option value="11">Daihatsu</option><option value="12">Dodge</option><option value="91">Effa</option><option value="67">Engesa</option><option value="68">Envemo</option><option value="252">Fargo</option><option value="13">Ferrari</option><option value="246">Geely</option><option value="69">GMC</option><option value="98">Great Wall</option><option value="50">Gurgel</option><option value="93">Hafei Towner</option><option value="244">Haima</option><option value="83">Hummer</option><option value="95">Infiniti</option><option value="102">Isuzu</option><option value="71">Iveco</option><option value="228">JAC</option><option value="18">Jaguar</option><option value="19">Jeep</option><option value="96">Jinbei Topic</option><option value="251">Jonway</option><option value="48">JPX</option><option value="21">Lada</option><option value="52">Lamborghini</option><option value="22">Land Rover</option><option value="248">Landwind</option><option value="23">Lexus</option><option value="106">Lifan</option><option value="51">Lincoln</option><option value="105">Lobini</option><option value="89">Lotus</option><option value="86">Mahindra</option><option value="24">Maserati</option><option value="72">Matra</option><option value="25">Mazda</option><option value="237">MCLAREN</option><option value="229">MG</option><option value="92">MG Spayc</option><option value="56">MINI</option><option value="85">Oldsmobile</option><option value="90">Pagani</option><option value="57">Plymouth</option><option value="58">Pontiac</option><option value="30">Porsche</option><option value="241">Rely</option><option value="238">Rolls-Royce</option><option value="84">Saab</option><option value="60">Saturn</option><option value="32">Seat</option><option value="236">Shineray</option><option value="250">Shuanghuan</option><option value="61">Smart</option><option value="101">Spyker</option><option value="41">SsangYong</option><option value="33">Subaru</option><option value="242">Sunbeam</option><option value="34">Suzuki</option><option value="107">TAC</option><option value="47">Troller</option><option value="38">Volvo</option></optgroup><optgroup label="&nbsp;"><option value="103">AC Cars</option><option value="87">Buggy BRM</option><option value="54">Chamonix</option><option value="40">Outras</option></optgroup>
        </select>
        </td>
        <td class="label"><label class="icr-label" for="modeloComprar">Modelo</label></td>
        <td class="input">
        <select class="icr-input  input_avaliar" size="1" id="modeloAvaliar" name="modelo" onfocus="verifyStaleModelosEmLinha(MM_findObj('marcaAvaliar'), this);" onchange="preencherFaixaAnosModelosByModelo(this, MM_findObj('anoModelo'), MM_findObj('versao'));" icr-error-message="Modelo" disabled="">
        <option value="">Modelo</option>
        </select>
        </td>
        </tr>
        <tr>
        <td class="label"><label class="icr-label" for="anomodeloinicial">Ano</label></td>
        <td class="input">
        <select class="icr-input input_avaliar" size="1" id="anoModelo" name="anoModelo" onchange="preencherVersoesByModeloAno(MM_findObj('modeloAvaliar'), MM_findObj('anoModelo'), MM_findObj('versao'), '');" icr-error-message="Ano do Modelo" disabled="">
        <option value="">Ano do Modelo</option>
        </select>
        </td>
        <td class="label"><label class="icr-label esquerda" for="precominimo">Versão</label></td>
        <td class="input">
        <select class="icr-input input_avaliar" size="1" id="versao" name="versao" icr-error-message="Versão" disabled="">
        <option value="">Versão</option>
        </select>
        </td>
        </tr>
        <tr>
        <td class="label"><label class="icr-label esquerda" for="precominimo">Estado</label></td>
        <td colspan="3">
        <select style="width: 45% !important;" class="icr-input input_grande" id="ufAvaliar" name="uf" icr-error-message="Estado">
        <option value="">Estado</option>

        <option value="AC">Acre</option>

        <option value="AL">Alagoas</option>

        <option value="AP">Amapá</option>

        <option value="AM">Amazonas</option>

        <option value="BA">Bahia</option>

        <option value="CE">Ceará</option>

        <option value="DF">Distrito Federal</option>

        <option value="ES">Espírito Santo</option>

        <option value="GO">Goiás</option>

        <option value="MA">Maranhão</option>

        <option value="MT">Mato Grosso</option>

        <option value="MS">Mato Grosso do Sul</option>

        <option value="MG">Minas Gerais</option>

        <option value="PA">Pará</option>

        <option value="PB">Paraíba</option>

        <option value="PR">Paraná</option>

        <option value="PE">Pernambuco</option>

        <option value="PI">Piauí</option>

        <option value="RJ" selected="">Rio de Janeiro</option>

        <option value="RN">Rio Grande do Norte</option>

        <option value="RS">Rio Grande do Sul</option>

        <option value="RO">Rondônia</option>

        <option value="RR">Roraima</option>

        <option value="SC">Santa Catarina</option>

        <option value="SP">São Paulo</option>

        <option value="SE">Sergipe</option>

        <option value="TO">Tocantins</option>

        </select>
        </td>
        </tr>
        <tr>
        <td class="label"><label class="icr-label" for="nomeAvaliar">Nome</label></td>
        <td class="input">
        <input type="text" id="nomeAvaliar" name="nome" class="icr-input input_avaliar" placeholder="Nome" data-nav="nome" icr-error-message="Nome">
        </td>
        <td class="label"><label class="icr-label" for="emailAvaliar">Email</label></td>
        <td class="input">
        <input type="text" id="emailAvaliar" name="email" data-nav="email" class="icr-input input_avaliar" placeholder="E-mail" icr-error-message="E-mail">
        </td>
        </tr>
        <tr>
        <td colspan="4">
        <div class="esquerda">
        <div class="icr-checkbox">
        <label>
        <input type="checkbox" id="newsletter" name="newsletter" value="1" checked="">
        <span>Receber ofertas e promoções do iCarros</span>
        </label>
        </div>
        </div>
        <div class="direita">
        <button type="submit" id="btnAvaliar" class="icr-btn icr-btn-redondo icr-btn-xl icr-btn-laranja">
        <span class="ui-button-text">avaliar</span>
        </button>
        </div>
        </td>
        </tr>
        </tbody>
        </table>
        </form>


        </div>*}
    </div>

</div>
