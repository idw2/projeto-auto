<?php /* Smarty version Smarty-3.1.19, created on 2015-03-17 07:58:21
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/emails/contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16930413755508410de2b317-60319310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c79280bd94de0b163884d72dcf532da2697976a1' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/emails/contato.tpl',
      1 => 1422884680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16930413755508410de2b317-60319310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_nome' => 0,
    'view_email' => 0,
    'view_assunto' => 0,
    'view_mensagem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5508410de6a5c7_10440379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508410de6a5c7_10440379')) {function content_5508410de6a5c7_10440379($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre style="font-size: 20px;">
            <p><b>Nome:</b> <?php echo $_smarty_tpl->tpl_vars['view_nome']->value;?>
</p>
            <p><b>Email:</b> <?php echo $_smarty_tpl->tpl_vars['view_email']->value;?>
</p>
            <p><b>Assunto:</b> <?php echo $_smarty_tpl->tpl_vars['view_assunto']->value;?>
</p>
            <p><b>Mensagem:</b><br/><?php echo $_smarty_tpl->tpl_vars['view_mensagem']->value;?>
</p>
        </pre>
    </body>
</html><?php }} ?>
