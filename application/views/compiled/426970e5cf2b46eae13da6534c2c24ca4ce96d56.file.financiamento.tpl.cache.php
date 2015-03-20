<?php /* Smarty version Smarty-3.1.19, created on 2015-03-16 12:30:32
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/financiamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191741397155072f5812cca1-60906298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '426970e5cf2b46eae13da6534c2c24ca4ce96d56' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/financiamento.tpl',
      1 => 1426198659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191741397155072f5812cca1-60906298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuracao' => 0,
    'endereco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55072f582e7914_81835259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55072f582e7914_81835259')) {function content_55072f582e7914_81835259($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row">
        <div class="col-md-6">
            <!-- h1 e p que já tínhamos -->
            <h2>Ainda com dúvidas?</h2>
            <br/>
            <p><strong>E-mail:</strong><br />
                <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->EMAIL_FALECONOSCO;?>

            </p>
            <br/>
            <p><strong>Obs:</strong><br/>
                <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->OBS_FALECONOSCO;?>

            </p>

        </div> 

        <div class="col-md-6">


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
                    <button type="button" class="btn btn-block btn-primary btn-lg" id="btn-send-proposta" style="margin: 0">Solicitar Orçamento</button><span id="visualizar"></span>
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





<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
