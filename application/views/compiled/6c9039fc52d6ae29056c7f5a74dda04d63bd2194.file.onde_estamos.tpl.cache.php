<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 14:37:21
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/onde_estamos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140636506555020711d6bfd3-92390609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c9039fc52d6ae29056c7f5a74dda04d63bd2194' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/onde_estamos.tpl',
      1 => 1426089973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140636506555020711d6bfd3-92390609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'endereco' => 0,
    'onde_estamos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550207120e26a7_43090534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550207120e26a7_43090534')) {function content_550207120e26a7_43090534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Onde estamos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-4">

            <p style='font-size: 0.9em;'><strong>Endereço:</strong><br />
                <?php echo $_smarty_tpl->tpl_vars['endereco']->value->LOGRADOURO;?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->NUMERO;?>
 
            <?php if ($_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO!=''&&!is_array($_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO)) {?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO;?>
 - <?php }?>    <br>
            <?php echo $_smarty_tpl->tpl_vars['endereco']->value->BAIRRO;?>
 - <?php echo $_smarty_tpl->tpl_vars['endereco']->value->CIDADE;?>
/<?php echo $_smarty_tpl->tpl_vars['endereco']->value->UF;?>
 <br> CEP: <?php echo $_smarty_tpl->tpl_vars['endereco']->value->CEP;?>
</p>
               </div>
            <div class="col-xs-8">
            <div class="map-frame" style="margin-bottom: 18px;">
                <iframe src="https://maps.google.com/maps?q=<?php echo $_smarty_tpl->tpl_vars['onde_estamos']->value;?>
&output=embed" width="600" height="450" frameborder="0" style="border:0;width: 100%;"></iframe>
            </div>
            </div>
                
                
        </div>
    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
