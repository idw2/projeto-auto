<?php /* Smarty version Smarty-3.1.19, created on 2015-03-17 08:02:39
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190576775508420f2c65b2-14603448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3f6f122c7e6cc6dd7e040cebe65e41e4a67f2e0' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/detalhes.tpl',
      1 => 1426539380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190576775508420f2c65b2-14603448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carro' => 0,
    'fotos' => 0,
    'foto' => 0,
    'site' => 0,
    'configuracao' => 0,
    'endereco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5508420f514275_38612427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508420f514275_38612427')) {function content_5508420f514275_38612427($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>




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
                        <input type="hidden"id="site" name="site" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
"/>
                        <input type="hidden"id="email_recipiente" name="email_recipiente" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->EMAIL_FALECONOSCO;?>
"/>
                        <input type="hidden"id="alias" name="alias" maxlength="40" value="<?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->ALIAS)) {?><?php echo $_smarty_tpl->tpl_vars['configuracao']->value->ALIAS;?>
<?php }?>"/>
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

<section>
    <div class="container"><?php echo $_smarty_tpl->getSubTemplate ("filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
</div>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
