<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 15:35:41
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/usados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2033057908550214bdcceda3-67153225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cf3c3ad122f2eb49089e50a19742cac6dfdfdb7' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/usados.tpl',
      1 => 1426198429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2033057908550214bdcceda3-67153225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controle4' => 0,
    'language' => 0,
    'usados' => 0,
    'i' => 0,
    'usado' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550214bde8f506_76486426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550214bde8f506_76486426')) {function content_550214bde8f506_76486426($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/auto.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Usados</h2>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <?php echo $_smarty_tpl->getSubTemplate ("filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>        
    </div>

    <br>

    <div class="row">
        <div class="col-xs-12">
            <div class="col-md-12">
                <?php if ($_smarty_tpl->tpl_vars['controle4']->value) {?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="grid">
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['usados']->value->URL_AMIGAVEL;?>
"><i class="icon-plus"></i></a>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['usados']->value->FOTO;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['usados']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['usados']->value->NOME;?>
">
                                    <p><?php echo $_smarty_tpl->tpl_vars['usados']->value->NOME;?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['usados']->value->PRECO;?>
</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>

                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['usado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usado']->key => $_smarty_tpl->tpl_vars['usado']->value) {
$_smarty_tpl->tpl_vars['usado']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value, null, 0);?> 
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                    <?php } ?>

                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['usado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usado']->key => $_smarty_tpl->tpl_vars['usado']->value) {
$_smarty_tpl->tpl_vars['usado']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid">
                                    <?php }?>
                                    <div class="item-grid">
                                        <div class="ribbon red"><span>Novo</span></div>
                                        <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['usado']->value['URL_AMIGAVEL'];?>
"><i class="icon-plus"></i></a>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['usado']->value['FOTO'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['usado']->value['NOME'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['usado']->value['NOME'];?>
">
                                        <p><?php echo $_smarty_tpl->tpl_vars['usado']->value['NOME'];?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['usado']->value['PRECO'];?>
</span></p>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['total']->value) {?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                    <?php } ?>
                <?php }?> 
            </div>
        </div>
    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
