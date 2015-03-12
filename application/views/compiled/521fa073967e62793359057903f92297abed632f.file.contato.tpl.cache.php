<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 14:00:56
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14397281605501fe888d1756-21442110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521fa073967e62793359057903f92297abed632f' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/contato.tpl',
      1 => 1422884676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14397281605501fe888d1756-21442110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuracao' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'site' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5501fe895e79d1_84168222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501fe895e79d1_84168222')) {function content_5501fe895e79d1_84168222($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row">
        <div class="col-md-6">
            <!-- h1 e p que já tínhamos -->
            <h2>Ainda está com problemas?</h2>
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
            
            <form id="formulario" method="post" enctype="multipart/form-data">    
                <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>

                <?php } else { ?>

                    <?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="FALSE") {?>
                        <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                    <?php } else { ?>
                        <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                    <?php }?>
                <?php }?>

                <h2>Fale conosco</h2>
                <br/>
                <p>
                    <input type="hidden"id="site" name="site" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
"/>
                    <input type="hidden"id="email_recipiente" name="email_recipiente" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->EMAIL_FALECONOSCO;?>
"/>
                    <input type="hidden"id="alias" name="alias" maxlength="40" value="<?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->ALIAS)) {?><?php echo $_smarty_tpl->tpl_vars['configuracao']->value->ALIAS;?>
<?php }?>"/>
                    <input class="form-control" id="nome" name="nome" maxlength="40" value="" placeholder="Nome completo"/>
                </p>
                <p><input type="email" class="form-control" id="email" name="email" maxlength="70" value="" placeholder="E-mail"/></p>
                <p><input class="form-control" id="assunto" name="assunto" maxlength="70" value="" placeholder="Assunto"/></p>
                <p><textarea class="form-control" rows="5" id="mensagem" name="mensagem"><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</textarea></p>
                <p><span type="buttom" class="btn red" name="enviar" id="btn-send-contato">ENVIAR</span> <span id="visualizar"></span></p>

            </form>
        </div>
    </div>
</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
