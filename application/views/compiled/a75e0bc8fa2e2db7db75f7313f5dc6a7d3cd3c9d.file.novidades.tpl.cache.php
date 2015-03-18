<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 15:41:37
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/novidades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1444631940550216211ea399-59815271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a75e0bc8fa2e2db7db75f7313f5dc6a7d3cd3c9d' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/novidades.tpl',
      1 => 1426198264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1444631940550216211ea399-59815271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controle1' => 0,
    'language' => 0,
    'novidades' => 0,
    'i' => 0,
    'novidade' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550216213ac4e3_19176079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550216213ac4e3_19176079')) {function content_550216213ac4e3_19176079($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/auto.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Novidades</h2>
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

                <?php if ($_smarty_tpl->tpl_vars['controle1']->value) {?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="grid">
                                <div class="item-grid">
                                    <div class="ribbon red"><span>Novo</span></div>
                                    <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['novidades']->value->URL_AMIGAVEL;?>
"><i class="icon-plus"></i></a>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['novidades']->value->FOTO;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['novidades']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['novidades']->value->NOME;?>
">
                                    <p><?php echo $_smarty_tpl->tpl_vars['novidades']->value->NOME;?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['novidades']->value->PRECO;?>
</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>

                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['novidade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['novidade']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['novidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['novidade']->key => $_smarty_tpl->tpl_vars['novidade']->value) {
$_smarty_tpl->tpl_vars['novidade']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["total"] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value, null, 0);?>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                    <?php } ?>

                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['novidade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['novidade']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['novidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['novidade']->key => $_smarty_tpl->tpl_vars['novidade']->value) {
$_smarty_tpl->tpl_vars['novidade']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid">
                                    <?php }?>
                                    <div class="item-grid">
                                        <div class="ribbon red"><span>Novo</span></div>
                                        <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['novidade']->value['URL_AMIGAVEL'];?>
"><i class="icon-plus"></i></a>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['novidade']->value['FOTO'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['novidade']->value['NOME'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['novidade']->value['NOME'];?>
">
                                        <p><?php echo $_smarty_tpl->tpl_vars['novidade']->value['NOME'];?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['novidade']->value['PRECO'];?>
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
