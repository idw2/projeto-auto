<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 12:38:51
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74637855455033ccbe81847-97004228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e57c571025059f4931ec87a907abb7446f68c9eb' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/empresa.tpl',
      1 => 1422884683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74637855455033ccbe81847-97004228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'institucional' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55033ccd2274b8_64834398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55033ccd2274b8_64834398')) {function content_55033ccd2274b8_64834398($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Nossa empresa</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <?php echo $_smarty_tpl->tpl_vars['institucional']->value;?>

        </div>
    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
