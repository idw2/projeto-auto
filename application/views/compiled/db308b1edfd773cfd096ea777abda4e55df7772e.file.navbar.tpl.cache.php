<?php /* Smarty version Smarty-3.1.19, created on 2015-03-18 07:29:27
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92208666255098bc7a82340-29292468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db308b1edfd773cfd096ea777abda4e55df7772e' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/navbar.tpl',
      1 => 1426195850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92208666255098bc7a82340-29292468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55098bc7ad2b78_18778465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55098bc7ad2b78_18778465')) {function content_55098bc7ad2b78_18778465($_smarty_tpl) {?><ul class="nav navbar-nav" style="position: relative;top: 13px;">
    <li class="active"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/">Home</a></li>
    
   
    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/financiamento">Financiamento</a></li>
    <li class="dropdown ">
        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/empresa" class="dropdown-toggle" data-toggle="dropdown">Categorias<i class="icon-down-open-big"></i></a>
        <ul class="dropdown-menu">
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/novidades">Novidades</a></li>
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/zero-km">Zero KM</a></li>
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/seminovos">Seminovos</a></li>
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/usados">Usados</a></li>
        </ul>
    </li>
    <li class="dropdown ">
        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/empresa" class="dropdown-toggle" data-toggle="dropdown">Institucional<i class="icon-down-open-big"></i></a>
        <ul class="dropdown-menu">
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/empresa">A Empresa</a></li>
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/onde-estamos">Onde estamos</a></li>
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/contato">Contato</a></li>
        </ul>
    </li>

</ul><?php }} ?>
