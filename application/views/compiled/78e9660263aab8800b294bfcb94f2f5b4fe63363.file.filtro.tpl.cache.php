<?php /* Smarty version Smarty-3.1.19, created on 2015-03-18 07:29:27
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/filtro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158564912455098bc7adacd7-44749270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78e9660263aab8800b294bfcb94f2f5b4fe63363' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/filtro.tpl',
      1 => 1426686369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158564912455098bc7adacd7-44749270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'fabricantes' => 0,
    'fabricante' => 0,
    'i' => 0,
    'site' => 0,
    'configuracao' => 0,
    'fabricantes_vender' => 0,
    'fabricante_vender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55098bc7c52929_69326426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55098bc7c52929_69326426')) {function content_55098bc7c52929_69326426($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/auto.designlab.com.br/libraries/plugins/function.counter.php';
?>
<div style="margin: 40px auto;" role="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">COMPRAR</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">VENDER</a></li>
            
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home">

            <form name="formCrossBuscaCompra" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/resultados/"> 

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
                                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                                    <?php  $_smarty_tpl->tpl_vars['fabricante'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fabricante']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fabricantes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fabricante']->key => $_smarty_tpl->tpl_vars['fabricante']->value) {
$_smarty_tpl->tpl_vars['fabricante']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['fabricante']->value['NOME'];?>
" <?php if ($_smarty_tpl->tpl_vars['fabricante']->value==$_smarty_tpl->tpl_vars['fabricante']->value['NOME']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['fabricante']->value['NOME'];?>
</option>
                                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                    <?php } ?>
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
                                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 2016;
  if ($_smarty_tpl->tpl_vars['i']->value>=1929) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value>=1929; $_smarty_tpl->tpl_vars['i']->value--) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                    <?php }} ?>
                                </select>
                            </div>
                            <div class="cl col-md-5">
                                <select id="anomodelofinal" name="anofinal" size="1" class="icr-input icr-slt ano_preco">
                                    <option value="">até</option>
                                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 2016;
  if ($_smarty_tpl->tpl_vars['i']->value>=1929) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value>=1929; $_smarty_tpl->tpl_vars['i']->value--) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                    <?php }} ?>
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
                <input type="hidden"id="site" name="site" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
"/>
                <input type="hidden"id="email_recipiente" name="email_recipiente" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->EMAIL_FALECONOSCO;?>
"/>
                <input type="hidden"id="alias" name="alias" maxlength="40" value="<?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->ALIAS)) {?><?php echo $_smarty_tpl->tpl_vars['configuracao']->value->ALIAS;?>
<?php }?>"/>
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
                                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                                    <?php  $_smarty_tpl->tpl_vars['fabricante_vender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fabricante_vender']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fabricantes_vender']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fabricante_vender']->key => $_smarty_tpl->tpl_vars['fabricante_vender']->value) {
$_smarty_tpl->tpl_vars['fabricante_vender']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['fabricante_vender']->value['NOME'];?>
" <?php if ($_smarty_tpl->tpl_vars['fabricante_vender']->value==$_smarty_tpl->tpl_vars['fabricante_vender']->value['NOME']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['fabricante_vender']->value['NOME'];?>
</option>
                                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                    <?php } ?>
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
                                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 2016;
  if ($_smarty_tpl->tpl_vars['i']->value>=1929) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value>=1929; $_smarty_tpl->tpl_vars['i']->value--) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                    <?php }} ?>
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
                                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 2016;
  if ($_smarty_tpl->tpl_vars['i']->value>=1929) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value>=1929; $_smarty_tpl->tpl_vars['i']->value--) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                    <?php }} ?>
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
<?php }} ?>
