<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 14:01:17
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21140736575501fe9d4d79e8-15281260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3f6f122c7e6cc6dd7e040cebe65e41e4a67f2e0' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/detalhes.tpl',
      1 => 1426102003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21140736575501fe9d4d79e8-15281260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carro' => 0,
    'fotos' => 0,
    'foto' => 0,
    'endereco' => 0,
    'configuracao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5501fe9d7dd004_91455988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501fe9d7dd004_91455988')) {function content_5501fe9d7dd004_91455988($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>




<section class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="font-weight: 400;font-size: 3.2rem;margin-bottom: 16px;"><strong><?php echo $_smarty_tpl->tpl_vars['carro']->value->NOME;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['carro']->value->ANO;?>
</h1>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-8">
            


            <div class="veiculo-slider flexslider">
                <ul class="slides">
                    <?php  $_smarty_tpl->tpl_vars['foto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foto']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fotos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foto']->key => $_smarty_tpl->tpl_vars['foto']->value) {
$_smarty_tpl->tpl_vars['foto']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['foto']->key;
?>
                        <?php if (!is_array($_smarty_tpl->tpl_vars['foto']->value['CROPH1440'])) {?>
                            <li><img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value['CROPH1440'];?>
" /></li>
                            <?php }?>
                        <?php } ?>
                </ul>
            </div>
            <div class="veiculo-carousel flexslider">
                <ul class="slides">
                    <?php  $_smarty_tpl->tpl_vars['foto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foto']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fotos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foto']->key => $_smarty_tpl->tpl_vars['foto']->value) {
$_smarty_tpl->tpl_vars['foto']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['foto']->key;
?>
                        <?php if (!is_array($_smarty_tpl->tpl_vars['foto']->value['CROP268'])) {?>
                            <li style="margin-right: 10px"><img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value['CROP268'];?>
" /></li>
                            <?php }?>
                        <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="price">R$<?php echo $_smarty_tpl->tpl_vars['carro']->value->PRECO;?>
</h2>
                    <form class="ajax-form" action="" method="post">
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

                    <p style='line-height: 2.2em;'><?php echo $_smarty_tpl->tpl_vars['endereco']->value->LOGRADOURO;?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->NUMERO;?>
<br>
                        <?php if ($_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO!=''&&!is_array($_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO)) {?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO;?>
<br><?php }?>    
                        <?php echo $_smarty_tpl->tpl_vars['endereco']->value->BAIRRO;?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['endereco']->value->CIDADE;?>
/<?php echo $_smarty_tpl->tpl_vars['endereco']->value->UF;?>
<br />
                        CEP: <?php echo $_smarty_tpl->tpl_vars['endereco']->value->CEP;?>
</p>
                    <p><a href="" style="font-size: 24px;letter-spacing: 0.04rem;font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['configuracao']->value->TELEFONE;?>
</a><p>
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
                    <strong class="info-destaque"><?php if ($_smarty_tpl->tpl_vars['carro']->value->ANO!='Array') {?><?php echo $_smarty_tpl->tpl_vars['carro']->value->ANO;?>
<?php }?></strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Km<br>
                    <strong class="info-destaque"><?php if ($_smarty_tpl->tpl_vars['carro']->value->KM!='Array') {?><?php echo $_smarty_tpl->tpl_vars['carro']->value->KM;?>
<?php }?></strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Cor<br>
                    <strong class="info-destaque"><?php if ($_smarty_tpl->tpl_vars['carro']->value->COR!='Array') {?><?php echo $_smarty_tpl->tpl_vars['carro']->value->COR;?>
<?php }?></strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Câmbio<br>
                    <strong class="info-destaque"><?php if ($_smarty_tpl->tpl_vars['carro']->value->CAMBIO!='Array') {?><?php echo $_smarty_tpl->tpl_vars['carro']->value->CAMBIO;?>
<?php }?></strong>
                </p>
            </div>
            <div class="col col-sm-2">
                <p class="text-center">Portas<br>
                    <strong class="info-destaque"><?php if ($_smarty_tpl->tpl_vars['carro']->value->PORTAS!='Array') {?><?php echo $_smarty_tpl->tpl_vars['carro']->value->PORTAS;?>
<?php }?></strong>
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
                    <p><?php echo $_smarty_tpl->tpl_vars['carro']->value->ESPECIFICACOES;?>
</p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div style="margin: 40px auto;" role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">COMPRAR</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">VENDER</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">COMPARAR COM 0km</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">TABELA FIPE</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home">

                <h3 class="subtitulo">Encontre o carro que procura</h3>
                <form name="formCrossBuscaCompra" method="GET" action="/ache/listaanuncios.jsp" accept-charset="ISO-8859-1" autocomplete="off">
                    <input type="hidden" name="bid" value="0">
                    <input type="hidden" name="cidade" value="7043">
                    <input type="hidden" name="opcaocidade" value="1">
                    <input type="hidden" name="foa" value="1">

                    <input type="hidden" name="endo_id" value="36">

                    <table class="form" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <div class="icr-inline-group">
                                        <div class="icr-group">
                                            <div class="icr-checkbox">
                                                <label>
                                                    <input id="anunciosNovosComprar" name="anunciosNovos" type="checkbox" value="1" checked="">
                                                    <span>0km</span>
                                                </label>
                                            </div>
                                            <div class="icr-checkbox">
                                                <label>
                                                    <input id="anunciosUsadosComprar" name="anunciosUsados" type="checkbox" value="1" checked="">
                                                    <span>usados</span>
                                                </label>
                                            </div>
                                            <div class="icr-checkbox">
                                                <label>
                                                    <input id="financiamentoComprar" name="financiamento" type="checkbox" value="true">
                                                    <span>apenas ofertas com financiamento</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="label"><label class="icr-label" for="marcaComprar">Marca</label></td>
                                <td class="input">
                                    <select id="marcaComprar" name="marca1" class="icr-input icr-slt marca_modelo" onchange="preencherModelosByMarca(this, MM_findObj('modelo1'), null, null, null, null);">
                                        <option value="0">&nbsp;</option>
                                        <optgroup label="">

                                            <option value="3">Audi</option>

                                            <option value="4">BMW</option>

                                            <option value="5">Chevrolet</option>

                                            <option value="7">Citroen</option>

                                            <option value="14">Fiat</option>

                                            <option value="15">Ford</option>

                                            <option value="16">Honda</option>

                                            <option value="17">Hyundai</option>

                                            <option value="20">Kia</option>

                                            <option value="26">Mercedes Benz</option>

                                            <option value="27">Mitsubishi</option>

                                            <option value="28">Nissan</option>

                                            <option value="29">Peugeot</option>

                                            <option value="31">Renault</option>

                                            <option value="35">Toyota</option>

                                            <option value="36">Volkswagen</option>

                                        </optgroup>
                                        <optgroup label="">

                                            <option value="103">AC Cars</option>

                                            <option value="53">Acura</option>

                                            <option value="1">Alfa Romeo</option>

                                            <option value="2">Asia</option>

                                            <option value="99">Aston Martin</option>

                                            <option value="3">Audi</option>

                                            <option value="104">Bentley</option>

                                            <option value="4">BMW</option>

                                            <option value="87">Buggy BRM</option>

                                            <option value="108">Buick</option>

                                            <option value="94">Cadillac</option>

                                            <option value="230">Carver Concept</option>

                                            <option value="54">Chamonix</option>

                                            <option value="88">Changan (Chana)</option>

                                            <option value="100">Chery</option>

                                            <option value="5">Chevrolet</option>

                                            <option value="6">Chrysler</option>

                                            <option value="7">Citroen</option>

                                            <option value="97">CN Auto</option>

                                            <option value="66">Crosslander</option>

                                            <option value="10">Daewoo</option>

                                            <option value="11">Daihatsu</option>

                                            <option value="12">Dodge</option>

                                            <option value="91">Effa</option>

                                            <option value="67">Engesa</option>

                                            <option value="68">Envemo</option>

                                            <option value="252">Fargo</option>

                                            <option value="13">Ferrari</option>

                                            <option value="14">Fiat</option>

                                            <option value="15">Ford</option>

                                            <option value="246">Geely</option>

                                            <option value="69">GMC</option>

                                            <option value="98">Great Wall</option>

                                            <option value="50">Gurgel</option>

                                            <option value="93">Hafei Towner</option>

                                            <option value="244">Haima</option>

                                            <option value="16">Honda</option>

                                            <option value="83">Hummer</option>

                                            <option value="17">Hyundai</option>

                                            <option value="95">Infiniti</option>

                                            <option value="102">Isuzu</option>

                                            <option value="71">Iveco</option>

                                            <option value="228">JAC</option>

                                            <option value="18">Jaguar</option>

                                            <option value="19">Jeep</option>

                                            <option value="96">Jinbei Topic</option>

                                            <option value="251">Jonway</option>

                                            <option value="48">JPX</option>

                                            <option value="20">Kia</option>

                                            <option value="21">Lada</option>

                                            <option value="52">Lamborghini</option>

                                            <option value="22">Land Rover</option>

                                            <option value="248">Landwind</option>

                                            <option value="23">Lexus</option>

                                            <option value="106">Lifan</option>

                                            <option value="51">Lincoln</option>

                                            <option value="105">Lobini</option>

                                            <option value="89">Lotus</option>

                                            <option value="86">Mahindra</option>

                                            <option value="24">Maserati</option>

                                            <option value="72">Matra</option>

                                            <option value="25">Mazda</option>

                                            <option value="237">MCLAREN</option>

                                            <option value="26">Mercedes Benz</option>

                                            <option value="229">MG</option>

                                            <option value="92">MG Spayc</option>

                                            <option value="56">MINI</option>

                                            <option value="27">Mitsubishi</option>

                                            <option value="28">Nissan</option>

                                            <option value="85">Oldsmobile</option>

                                            <option value="40">Outras</option>

                                            <option value="90">Pagani</option>

                                            <option value="29">Peugeot</option>

                                            <option value="57">Plymouth</option>

                                            <option value="58">Pontiac</option>

                                            <option value="30">Porsche</option>

                                            <option value="241">Rely</option>

                                            <option value="31">Renault</option>

                                            <option value="238">Rolls-Royce</option>

                                            <option value="84">Saab</option>

                                            <option value="60">Saturn</option>

                                            <option value="32">Seat</option>

                                            <option value="236">Shineray</option>

                                            <option value="250">Shuanghuan</option>

                                            <option value="61">Smart</option>

                                            <option value="101">Spyker</option>

                                            <option value="41">SsangYong</option>

                                            <option value="33">Subaru</option>

                                            <option value="242">Sunbeam</option>

                                            <option value="34">Suzuki</option>

                                            <option value="107">TAC</option>

                                            <option value="35">Toyota</option>

                                            <option value="47">Troller</option>

                                            <option value="36">Volkswagen</option>

                                            <option value="38">Volvo</option>

                                        </optgroup>
                                    </select>
                                </td>
                                <td class="label"><label class="icr-label" for="modeloComprar">Modelo</label></td>
                                <td class="input">
                                    <select id="modeloComprar" name="modelo1" class="icr-input icr-slt marca_modelo"><option value=""></option><option value="12">100</option><option value="20">100 Avant</option><option value="13">80</option><option value="21">80 Avant</option><option value="14">80 Cabriolet</option><option value="2251">A1</option><option value="15">A3</option><option value="2550">A3 Cabriolet</option><option value="2517">A3 Sedan</option><option value="16">A4</option><option value="22">A4 Avant</option><option value="17">A4 Cabriolet</option><option value="984">A5</option><option value="18">A6</option><option value="23">A6 Avant</option><option value="2257">A7</option><option value="19">A8</option><option value="24">Allroad Avant</option><option value="2380">Q3</option><option value="1020">Q5</option><option value="895">Q7</option><option value="941">R8</option><option value="25">RS2 Avant</option><option value="2331">RS3</option><option value="847">RS4</option><option value="26">RS4 Avant</option><option value="2246">RS5</option><option value="30">RS6</option><option value="27">RS6 Avant</option><option value="2545">RS7</option><option value="2573">RSQ3</option><option value="31">S3</option><option value="2549">S3 Sedan</option><option value="32">S4</option><option value="28">S4 Avant</option><option value="2440">S5</option><option value="33">S6</option><option value="29">S6 Avant</option><option value="2441">S7</option><option value="34">S8</option><option value="2544">SQ5</option><option value="35">TT</option><option value="2575">TTRS</option><option value="1111">TTS</option></select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label"><label class="icr-label" for="anomodeloinicial">Ano</label></td>
                                <td class="input">
                                    <ul class="listahorizontal">
                                        <li class="esquerda ano_preco">
                                            <select id="anomodeloinicial" name="anomodeloinicial" size="1" class="icr-input icr-slt">
                                                <option value="0">de</option>

                                                <option value="2016">de 2016</option>

                                                <option value="2015">de 2015</option>

                                                <option value="2014">de 2014</option>

                                                <option value="2013">de 2013</option>

                                                <option value="2012">de 2012</option>

                                                <option value="2011">de 2011</option>

                                                <option value="2010">de 2010</option>

                                                <option value="2009">de 2009</option>

                                                <option value="2008">de 2008</option>

                                                <option value="2007">de 2007</option>

                                                <option value="2006">de 2006</option>

                                                <option value="2005">de 2005</option>

                                                <option value="2004">de 2004</option>

                                                <option value="2003">de 2003</option>

                                                <option value="2002">de 2002</option>

                                                <option value="2001">de 2001</option>

                                                <option value="2000">de 2000</option>

                                                <option value="1999">de 1999</option>

                                                <option value="1998">de 1998</option>

                                                <option value="1997">de 1997</option>

                                                <option value="1996">de 1996</option>

                                                <option value="1995">de 1995</option>

                                                <option value="1994">de 1994</option>

                                                <option value="1993">de 1993</option>

                                                <option value="1992">de 1992</option>

                                                <option value="1991">de 1991</option>

                                                <option value="1990">de 1990</option>

                                                <option value="1989">de 1989</option>

                                                <option value="1988">de 1988</option>

                                                <option value="1987">de 1987</option>

                                                <option value="1986">de 1986</option>

                                                <option value="1985">de 1985</option>

                                                <option value="1984">de 1984</option>

                                                <option value="1983">de 1983</option>

                                                <option value="1982">de 1982</option>

                                                <option value="1981">de 1981</option>

                                                <option value="1980">de 1980</option>

                                                <option value="1979">de 1979</option>

                                                <option value="1978">de 1978</option>

                                                <option value="1977">de 1977</option>

                                                <option value="1976">de 1976</option>

                                                <option value="1975">de 1975</option>

                                                <option value="1974">de 1974</option>

                                                <option value="1973">de 1973</option>

                                                <option value="1972">de 1972</option>

                                                <option value="1971">de 1971</option>

                                                <option value="1970">de 1970</option>

                                                <option value="1969">de 1969</option>

                                                <option value="1968">de 1968</option>

                                                <option value="1967">de 1967</option>

                                                <option value="1966">de 1966</option>

                                                <option value="1965">de 1965</option>

                                                <option value="1964">de 1964</option>

                                                <option value="1963">de 1963</option>

                                                <option value="1962">de 1962</option>

                                                <option value="1961">de 1961</option>

                                                <option value="1960">de 1960</option>

                                                <option value="1959">de 1959</option>

                                                <option value="1958">de 1958</option>

                                                <option value="1957">de 1957</option>

                                                <option value="1956">de 1956</option>

                                                <option value="1955">de 1955</option>

                                                <option value="1954">de 1954</option>

                                                <option value="1953">de 1953</option>

                                                <option value="1952">de 1952</option>

                                                <option value="1951">de 1951</option>

                                                <option value="1950">de 1950</option>

                                                <option value="1949">de 1949</option>

                                                <option value="1948">de 1948</option>

                                                <option value="1947">de 1947</option>

                                                <option value="1946">de 1946</option>

                                                <option value="1945">de 1945</option>

                                                <option value="1944">de 1944</option>

                                                <option value="1943">de 1943</option>

                                                <option value="1942">de 1942</option>

                                                <option value="1941">de 1941</option>

                                                <option value="1940">de 1940</option>

                                                <option value="1939">de 1939</option>

                                                <option value="1938">de 1938</option>

                                                <option value="1937">de 1937</option>

                                                <option value="1936">de 1936</option>

                                                <option value="1935">de 1935</option>

                                                <option value="1934">de 1934</option>

                                                <option value="1933">de 1933</option>

                                                <option value="1932">de 1932</option>

                                                <option value="1931">de 1931</option>

                                                <option value="1930">de 1930</option>

                                                <option value="1929">de 1929</option>

                                            </select>
                                        </li>
                                        <li class="direita ultimo">
                                            <select id="anomodelofinal" name="anomodelofinal" size="1" class="icr-input icr-slt direita ano_preco">
                                                <option value="0">até</option>

                                                <option value="2016">até 2016</option>

                                                <option value="2015">até 2015</option>

                                                <option value="2014">até 2014</option>

                                                <option value="2013">até 2013</option>

                                                <option value="2012">até 2012</option>

                                                <option value="2011">até 2011</option>

                                                <option value="2010">até 2010</option>

                                                <option value="2009">até 2009</option>

                                                <option value="2008">até 2008</option>

                                                <option value="2007">até 2007</option>

                                                <option value="2006">até 2006</option>

                                                <option value="2005">até 2005</option>

                                                <option value="2004">até 2004</option>

                                                <option value="2003">até 2003</option>

                                                <option value="2002">até 2002</option>

                                                <option value="2001">até 2001</option>

                                                <option value="2000">até 2000</option>

                                                <option value="1999">até 1999</option>

                                                <option value="1998">até 1998</option>

                                                <option value="1997">até 1997</option>

                                                <option value="1996">até 1996</option>

                                                <option value="1995">até 1995</option>

                                                <option value="1994">até 1994</option>

                                                <option value="1993">até 1993</option>

                                                <option value="1992">até 1992</option>

                                                <option value="1991">até 1991</option>

                                                <option value="1990">até 1990</option>

                                                <option value="1989">até 1989</option>

                                                <option value="1988">até 1988</option>

                                                <option value="1987">até 1987</option>

                                                <option value="1986">até 1986</option>

                                                <option value="1985">até 1985</option>

                                                <option value="1984">até 1984</option>

                                                <option value="1983">até 1983</option>

                                                <option value="1982">até 1982</option>

                                                <option value="1981">até 1981</option>

                                                <option value="1980">até 1980</option>

                                                <option value="1979">até 1979</option>

                                                <option value="1978">até 1978</option>

                                                <option value="1977">até 1977</option>

                                                <option value="1976">até 1976</option>

                                                <option value="1975">até 1975</option>

                                                <option value="1974">até 1974</option>

                                                <option value="1973">até 1973</option>

                                                <option value="1972">até 1972</option>

                                                <option value="1971">até 1971</option>

                                                <option value="1970">até 1970</option>

                                                <option value="1969">até 1969</option>

                                                <option value="1968">até 1968</option>

                                                <option value="1967">até 1967</option>

                                                <option value="1966">até 1966</option>

                                                <option value="1965">até 1965</option>

                                                <option value="1964">até 1964</option>

                                                <option value="1963">até 1963</option>

                                                <option value="1962">até 1962</option>

                                                <option value="1961">até 1961</option>

                                                <option value="1960">até 1960</option>

                                                <option value="1959">até 1959</option>

                                                <option value="1958">até 1958</option>

                                                <option value="1957">até 1957</option>

                                                <option value="1956">até 1956</option>

                                                <option value="1955">até 1955</option>

                                                <option value="1954">até 1954</option>

                                                <option value="1953">até 1953</option>

                                                <option value="1952">até 1952</option>

                                                <option value="1951">até 1951</option>

                                                <option value="1950">até 1950</option>

                                                <option value="1949">até 1949</option>

                                                <option value="1948">até 1948</option>

                                                <option value="1947">até 1947</option>

                                                <option value="1946">até 1946</option>

                                                <option value="1945">até 1945</option>

                                                <option value="1944">até 1944</option>

                                                <option value="1943">até 1943</option>

                                                <option value="1942">até 1942</option>

                                                <option value="1941">até 1941</option>

                                                <option value="1940">até 1940</option>

                                                <option value="1939">até 1939</option>

                                                <option value="1938">até 1938</option>

                                                <option value="1937">até 1937</option>

                                                <option value="1936">até 1936</option>

                                                <option value="1935">até 1935</option>

                                                <option value="1934">até 1934</option>

                                                <option value="1933">até 1933</option>

                                                <option value="1932">até 1932</option>

                                                <option value="1931">até 1931</option>

                                                <option value="1930">até 1930</option>

                                                <option value="1929">até 1929</option>

                                            </select>
                                        </li>
                                    </ul>
                                </td>
                                <td class="label"><label class="icr-label esquerda" for="precominimo">Preço</label></td>
                                <td class="input">
                                    <ul class="listahorizontal">
                                        <li class="esquerda ano_preco">
                                            <select id="precominimo" name="precominimo" size="1" class="icr-input icr-slt">
                                                <option value="0">de</option>

                                                <option value="4000">de R$ 4 mil</option>

                                                <option value="6000">de R$ 6 mil</option>

                                                <option value="8000">de R$ 8 mil</option>

                                                <option value="10000">de R$ 10 mil</option>

                                                <option value="12000">de R$ 12 mil</option>

                                                <option value="14000">de R$ 14 mil</option>

                                                <option value="16000">de R$ 16 mil</option>

                                                <option value="18000">de R$ 18 mil</option>

                                                <option value="20000">de R$ 20 mil</option>

                                                <option value="22000">de R$ 22 mil</option>

                                                <option value="24000">de R$ 24 mil</option>

                                                <option value="26000">de R$ 26 mil</option>

                                                <option value="28000">de R$ 28 mil</option>

                                                <option value="30000">de R$ 30 mil</option>

                                                <option value="35000">de R$ 35 mil</option>

                                                <option value="40000">de R$ 40 mil</option>

                                                <option value="45000">de R$ 45 mil</option>

                                                <option value="50000">de R$ 50 mil</option>

                                                <option value="60000">de R$ 60 mil</option>

                                                <option value="70000">de R$ 70 mil</option>

                                                <option value="80000">de R$ 80 mil</option>

                                                <option value="90000">de R$ 90 mil</option>

                                                <option value="100000">de R$ 100 mil</option>

                                                <option value="120000">de R$ 120 mil</option>

                                                <option value="150000">de R$ 150 mil</option>

                                                <option value="200000">de R$ 200 mil</option>

                                            </select>
                                        </li>
                                        <li class="direita ano_preco ultimo">
                                            <select id="precomaximo" name="precomaximo" size="1" class="icr-input icr-slt direita ano_preco">
                                                <option value="0">até</option>

                                                <option value="4000">até R$ 4 mil</option>

                                                <option value="6000">até R$ 6 mil</option>

                                                <option value="8000">até R$ 8 mil</option>

                                                <option value="10000">até R$ 10 mil</option>

                                                <option value="12000">até R$ 12 mil</option>

                                                <option value="14000">até R$ 14 mil</option>

                                                <option value="16000">até R$ 16 mil</option>

                                                <option value="18000">até R$ 18 mil</option>

                                                <option value="20000">até R$ 20 mil</option>

                                                <option value="22000">até R$ 22 mil</option>

                                                <option value="24000">até R$ 24 mil</option>

                                                <option value="26000">até R$ 26 mil</option>

                                                <option value="28000">até R$ 28 mil</option>

                                                <option value="30000">até R$ 30 mil</option>

                                                <option value="35000">até R$ 35 mil</option>

                                                <option value="40000">até R$ 40 mil</option>

                                                <option value="45000">até R$ 45 mil</option>

                                                <option value="50000">até R$ 50 mil</option>

                                                <option value="60000">até R$ 60 mil</option>

                                                <option value="70000">até R$ 70 mil</option>

                                                <option value="80000">até R$ 80 mil</option>

                                                <option value="90000">até R$ 90 mil</option>

                                                <option value="100000">até R$ 100 mil</option>

                                                <option value="120000">até R$ 120 mil</option>

                                                <option value="150000">até R$ 150 mil</option>

                                                <option value="200000">até R$ 200 mil</option>

                                            </select>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="toggle_location" style="display:block">
                                        <span class="icones icone-alvo"></span>
                                        <span style="font-size: 12px;" id="cidadeAbertoTexto">Pesquisando carros no Rio de Janeiro - RJ</span>
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
                                    <div class="direita">
                                        <button type="submit" class="icr-btn icr-btn-redondo icr-btn-xl icr-btn-laranja">
                                            <span>Buscar</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">

                                    <div class=" informacoes_busca">
                                        <div class="clearfix modelos_mais_buscados">
                                            <ul class="listahorizontal">
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

                                            </ul>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </form>

            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile">

                      <h3 class="subtitulo">Venda seu carro no maior site de carros do Brasil</h3>
            <form accept-charset="UTF-8" id="venderform" action="/vender/indexfaces.jsf?endo_id=37">
                
                    <input type="hidden" name="endo_id" value="38">
                
                <table id="formCrossVender" class="form" cellpadding="0" cellspacing="0" border="0">
                    <tbody><tr>
                        <td class="label"><label class="icr-label">Marca</label></td>
                        <td class="input">
                            <select name="marca" id="marcaVender" class="icr-input marca_modelo" onchange="preencherModelosEmLinhaByMarca(this, MM_findObj('modeloVender'));" defaultvalue="">
                                <option value="0">Selecione a marca</option>
                                <optgroup label=""><option value="3">Audi</option><option value="4">BMW</option><option value="5">Chevrolet</option><option value="7">Citroen</option><option value="14">Fiat</option><option value="15">Ford</option><option value="16">Honda</option><option value="17">Hyundai</option><option value="20">Kia</option><option value="26">Mercedes Benz</option><option value="27">Mitsubishi</option><option value="28">Nissan</option><option value="29">Peugeot</option><option value="31">Renault</option><option value="35">Toyota</option><option value="36">Volkswagen</option></optgroup><optgroup label="&nbsp;"><option value="99">Aston Martin</option><option value="104">Bentley</option><option value="88">Changan (Chana)</option><option value="100">Chery</option><option value="6">Chrysler</option><option value="12">Dodge</option><option value="91">Effa</option><option value="13">Ferrari</option><option value="246">Geely</option><option value="93">Hafei Towner</option><option value="244">Haima</option><option value="71">Iveco</option><option value="228">JAC</option><option value="18">Jaguar</option><option value="19">Jeep</option><option value="96">Jinbei Topic</option><option value="52">Lamborghini</option><option value="22">Land Rover</option><option value="23">Lexus</option><option value="106">Lifan</option><option value="86">Mahindra</option><option value="24">Maserati</option><option value="229">MG</option><option value="56">MINI</option><option value="30">Porsche</option><option value="241">Rely</option><option value="238">Rolls-Royce</option><option value="236">Shineray</option><option value="61">Smart</option><option value="41">SsangYong</option><option value="33">Subaru</option><option value="34">Suzuki</option><option value="107">TAC</option><option value="47">Troller</option><option value="38">Volvo</option></optgroup><optgroup label="&nbsp;"><option value="40">Outras</option></optgroup>
                            </select>
                        </td>
                        <td class="label"><label class="icr-label">Modelo</label></td>
                        <td class="input">
                            <select name="modelo" id="modeloVender" class="icr-input marca_modelo" onfocus="verifyStaleModelosComAnuncios(MM_findObj('marcaVender'),this)" onchange="preencherFaixaAnosFabricacaoByModelo(this, MM_findObj('anomodeloinicialVender'), MM_findObj('anomodelofinalVender'), MM_findObj('versaoVender'));">
                                <option value="0">
                                    
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><label class="icr-label">Ano</label></td>
                        <td class="input">
                            <ul class="listahorizontal">
                                <li class="esquerda ano_preco">
                                    <select id="anomodeloinicialVender" name="anomodeloinicial" size="1" class="icr-input icr-slt" onchange="preencherAnoModelo(MM_findObj('modeloVender'), MM_findObj('anomodeloinicialVender'), MM_findObj('anomodelofinalVender'), MM_findObj('versaoVender'),'');preencherVersoesByModeloAno(MM_findObj('modeloVender'), MM_findObj('anomodeloinicialVender'), MM_findObj('versaoVender'),'');">
                                        <option value="0">fabricação</option>
                                        
                                            <option value="2016">2016</option>
                                        
                                            <option value="2015">2015</option>
                                        
                                            <option value="2014">2014</option>
                                        
                                            <option value="2013">2013</option>
                                        
                                            <option value="2012">2012</option>
                                        
                                            <option value="2011">2011</option>
                                        
                                            <option value="2010">2010</option>
                                        
                                            <option value="2009">2009</option>
                                        
                                            <option value="2008">2008</option>
                                        
                                            <option value="2007">2007</option>
                                        
                                            <option value="2006">2006</option>
                                        
                                            <option value="2005">2005</option>
                                        
                                            <option value="2004">2004</option>
                                        
                                            <option value="2003">2003</option>
                                        
                                            <option value="2002">2002</option>
                                        
                                            <option value="2001">2001</option>
                                        
                                            <option value="2000">2000</option>
                                        
                                            <option value="1999">1999</option>
                                        
                                            <option value="1998">1998</option>
                                        
                                            <option value="1997">1997</option>
                                        
                                            <option value="1996">1996</option>
                                        
                                            <option value="1995">1995</option>
                                        
                                            <option value="1994">1994</option>
                                        
                                            <option value="1993">1993</option>
                                        
                                            <option value="1992">1992</option>
                                        
                                            <option value="1991">1991</option>
                                        
                                            <option value="1990">1990</option>
                                        
                                            <option value="1989">1989</option>
                                        
                                            <option value="1988">1988</option>
                                        
                                            <option value="1987">1987</option>
                                        
                                            <option value="1986">1986</option>
                                        
                                            <option value="1985">1985</option>
                                        
                                            <option value="1984">1984</option>
                                        
                                            <option value="1983">1983</option>
                                        
                                            <option value="1982">1982</option>
                                        
                                            <option value="1981">1981</option>
                                        
                                            <option value="1980">1980</option>
                                        
                                            <option value="1979">1979</option>
                                        
                                            <option value="1978">1978</option>
                                        
                                            <option value="1977">1977</option>
                                        
                                            <option value="1976">1976</option>
                                        
                                            <option value="1975">1975</option>
                                        
                                            <option value="1974">1974</option>
                                        
                                            <option value="1973">1973</option>
                                        
                                            <option value="1972">1972</option>
                                        
                                            <option value="1971">1971</option>
                                        
                                            <option value="1970">1970</option>
                                        
                                            <option value="1969">1969</option>
                                        
                                            <option value="1968">1968</option>
                                        
                                            <option value="1967">1967</option>
                                        
                                            <option value="1966">1966</option>
                                        
                                            <option value="1965">1965</option>
                                        
                                            <option value="1964">1964</option>
                                        
                                            <option value="1963">1963</option>
                                        
                                            <option value="1962">1962</option>
                                        
                                            <option value="1961">1961</option>
                                        
                                            <option value="1960">1960</option>
                                        
                                            <option value="1959">1959</option>
                                        
                                            <option value="1958">1958</option>
                                        
                                            <option value="1957">1957</option>
                                        
                                            <option value="1956">1956</option>
                                        
                                            <option value="1955">1955</option>
                                        
                                            <option value="1954">1954</option>
                                        
                                            <option value="1953">1953</option>
                                        
                                            <option value="1952">1952</option>
                                        
                                            <option value="1951">1951</option>
                                        
                                            <option value="1950">1950</option>
                                        
                                            <option value="1949">1949</option>
                                        
                                            <option value="1948">1948</option>
                                        
                                            <option value="1947">1947</option>
                                        
                                            <option value="1946">1946</option>
                                        
                                            <option value="1945">1945</option>
                                        
                                            <option value="1944">1944</option>
                                        
                                            <option value="1943">1943</option>
                                        
                                            <option value="1942">1942</option>
                                        
                                            <option value="1941">1941</option>
                                        
                                            <option value="1940">1940</option>
                                        
                                            <option value="1939">1939</option>
                                        
                                            <option value="1938">1938</option>
                                        
                                            <option value="1937">1937</option>
                                        
                                            <option value="1936">1936</option>
                                        
                                            <option value="1935">1935</option>
                                        
                                            <option value="1934">1934</option>
                                        
                                            <option value="1933">1933</option>
                                        
                                            <option value="1932">1932</option>
                                        
                                            <option value="1931">1931</option>
                                        
                                            <option value="1930">1930</option>
                                        
                                            <option value="1929">1929</option>
                                        
                                    </select>
                                </li>
                                <li class="direita ano_preco ultimo">
                                    <select id="anomodelofinalVender" name="anomodelofinal" size="1" class="icr-input icr-slt" onchange="preencherVersoesByModeloAno(MM_findObj('modeloVender'), MM_findObj('anomodeloinicialVender'), MM_findObj('versaoVender'),'');">
                                        <option value="0">modelo</option>
                                        
                                            <option value="2016">2016</option>
                                        
                                            <option value="2015">2015</option>
                                        
                                            <option value="2014">2014</option>
                                        
                                            <option value="2013">2013</option>
                                        
                                            <option value="2012">2012</option>
                                        
                                            <option value="2011">2011</option>
                                        
                                            <option value="2010">2010</option>
                                        
                                            <option value="2009">2009</option>
                                        
                                            <option value="2008">2008</option>
                                        
                                            <option value="2007">2007</option>
                                        
                                            <option value="2006">2006</option>
                                        
                                            <option value="2005">2005</option>
                                        
                                            <option value="2004">2004</option>
                                        
                                            <option value="2003">2003</option>
                                        
                                            <option value="2002">2002</option>
                                        
                                            <option value="2001">2001</option>
                                        
                                            <option value="2000">2000</option>
                                        
                                            <option value="1999">1999</option>
                                        
                                            <option value="1998">1998</option>
                                        
                                            <option value="1997">1997</option>
                                        
                                            <option value="1996">1996</option>
                                        
                                            <option value="1995">1995</option>
                                        
                                            <option value="1994">1994</option>
                                        
                                            <option value="1993">1993</option>
                                        
                                            <option value="1992">1992</option>
                                        
                                            <option value="1991">1991</option>
                                        
                                            <option value="1990">1990</option>
                                        
                                            <option value="1989">1989</option>
                                        
                                            <option value="1988">1988</option>
                                        
                                            <option value="1987">1987</option>
                                        
                                            <option value="1986">1986</option>
                                        
                                            <option value="1985">1985</option>
                                        
                                            <option value="1984">1984</option>
                                        
                                            <option value="1983">1983</option>
                                        
                                            <option value="1982">1982</option>
                                        
                                            <option value="1981">1981</option>
                                        
                                            <option value="1980">1980</option>
                                        
                                            <option value="1979">1979</option>
                                        
                                            <option value="1978">1978</option>
                                        
                                            <option value="1977">1977</option>
                                        
                                            <option value="1976">1976</option>
                                        
                                            <option value="1975">1975</option>
                                        
                                            <option value="1974">1974</option>
                                        
                                            <option value="1973">1973</option>
                                        
                                            <option value="1972">1972</option>
                                        
                                            <option value="1971">1971</option>
                                        
                                            <option value="1970">1970</option>
                                        
                                            <option value="1969">1969</option>
                                        
                                            <option value="1968">1968</option>
                                        
                                            <option value="1967">1967</option>
                                        
                                            <option value="1966">1966</option>
                                        
                                            <option value="1965">1965</option>
                                        
                                            <option value="1964">1964</option>
                                        
                                            <option value="1963">1963</option>
                                        
                                            <option value="1962">1962</option>
                                        
                                            <option value="1961">1961</option>
                                        
                                            <option value="1960">1960</option>
                                        
                                            <option value="1959">1959</option>
                                        
                                            <option value="1958">1958</option>
                                        
                                            <option value="1957">1957</option>
                                        
                                            <option value="1956">1956</option>
                                        
                                            <option value="1955">1955</option>
                                        
                                            <option value="1954">1954</option>
                                        
                                            <option value="1953">1953</option>
                                        
                                            <option value="1952">1952</option>
                                        
                                            <option value="1951">1951</option>
                                        
                                            <option value="1950">1950</option>
                                        
                                            <option value="1949">1949</option>
                                        
                                            <option value="1948">1948</option>
                                        
                                            <option value="1947">1947</option>
                                        
                                            <option value="1946">1946</option>
                                        
                                            <option value="1945">1945</option>
                                        
                                            <option value="1944">1944</option>
                                        
                                            <option value="1943">1943</option>
                                        
                                            <option value="1942">1942</option>
                                        
                                            <option value="1941">1941</option>
                                        
                                            <option value="1940">1940</option>
                                        
                                            <option value="1939">1939</option>
                                        
                                            <option value="1938">1938</option>
                                        
                                            <option value="1937">1937</option>
                                        
                                            <option value="1936">1936</option>
                                        
                                            <option value="1935">1935</option>
                                        
                                            <option value="1934">1934</option>
                                        
                                            <option value="1933">1933</option>
                                        
                                            <option value="1932">1932</option>
                                        
                                            <option value="1931">1931</option>
                                        
                                            <option value="1930">1930</option>
                                        
                                            <option value="1929">1929</option>
                                        
                                    </select>
                                </li>
                            </ul>
                        </td>
                        <td class="label"><label class="icr-label">Versao</label></td>
                        <td class="input">
                            <select id="versaoVender" name="versaoVender" class="icr-input icr-slt marca_modelo">
                                <option value="">Versão</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><label class="icr-label">Email</label></td>
                        <td colspan="3">
                            <input style="width:54%;" type="text" id="emailVender" name="email" data-nav="email" class="icr-input" onblur="formatCamp(this,'email');analisarEmail(this, 'email', 'labelEmail', '0px');" onkeypress="return(validaConteudo(event,this,'email'));">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="direita">
                                <button type="submit" id="btnVender" class="icr-btn icr-btn-redondo icr-btn-xl icr-btn-laranja">
                                    <span class="ui-button-text">vender</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody></table>
            </form>
        

            </div>

            <div role="tabpanel" class="tab-pane fade" id="messages">
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
                            <select name="modelo" id="modeloCompare" class="icr-input icr-slt" onfocus="verifyStaleModelosComAnuncios(MM_findObj('marcaCompare'),this)">
                                <option value="0">
                                    
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="direita">
                                <button type="submit" class="icr-btn icr-btn-redondo icr-btn-xl icr-btn-laranja">
                                    <span>buscar</span>
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
                                <select class="icr-input input_avaliar" size="1" id="anoModelo" name="anoModelo" onchange="preencherVersoesByModeloAno(MM_findObj('modeloAvaliar'), MM_findObj('anoModelo'), MM_findObj('versao'),'');" icr-error-message="Ano do Modelo" disabled="">
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
            
            
            </div>
        </div>

    </div>
</div>

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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>