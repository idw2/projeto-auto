<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 14:00:40
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9482613815501fe782b2f84-40031244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '9482613815501fe782b2f84-40031244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'institucional' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5501fe78374d95_95905276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501fe78374d95_95905276')) {function content_5501fe78374d95_95905276($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
