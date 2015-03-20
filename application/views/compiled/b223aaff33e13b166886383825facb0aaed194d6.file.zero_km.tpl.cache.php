<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 15:35:34
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/zero_km.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1572392894550214b6b03907-89649623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b223aaff33e13b166886383825facb0aaed194d6' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/zero_km.tpl',
      1 => 1426198305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1572392894550214b6b03907-89649623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controle2' => 0,
    'language' => 0,
    'zeros' => 0,
    'i' => 0,
    'zero' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550214b6cc80a6_90392649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550214b6cc80a6_90392649')) {function content_550214b6cc80a6_90392649($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/auto.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Zero KM</h2>
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
                <?php if ($_smarty_tpl->tpl_vars['controle2']->value) {?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="grid">
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['zeros']->value->URL_AMIGAVEL;?>
"><i class="icon-plus"></i></a>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['zeros']->value->FOTO;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['zeros']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['zeros']->value->NOME;?>
">
                                    <p><?php echo $_smarty_tpl->tpl_vars['zeros']->value->NOME;?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['zeros']->value->PRECO;?>
</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>

                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['zero'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zero']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zeros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zero']->key => $_smarty_tpl->tpl_vars['zero']->value) {
$_smarty_tpl->tpl_vars['zero']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value, null, 0);?> 
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                    <?php } ?>

                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['zero'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zero']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zeros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zero']->key => $_smarty_tpl->tpl_vars['zero']->value) {
$_smarty_tpl->tpl_vars['zero']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid">
                                    <?php }?>
                                    <div class="item-grid">
                                        <div class="ribbon red"><span>Novo</span></div>
                                        <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['zero']->value['URL_AMIGAVEL'];?>
"><i class="icon-plus"></i></a>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['zero']->value['FOTO'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['zero']->value['NOME'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['zero']->value['NOME'];?>
">
                                        <p><?php echo $_smarty_tpl->tpl_vars['zero']->value['NOME'];?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['zero']->value['PRECO'];?>
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
