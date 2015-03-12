<?php /* Smarty version Smarty-3.1.19, created on 2015-03-10 15:20:05
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/emails/contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36752429654ff6e15a76ed8-33331447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '36752429654ff6e15a76ed8-33331447',
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
  'unifunc' => 'content_54ff6e15ad81d5_32685801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff6e15ad81d5_32685801')) {function content_54ff6e15ad81d5_32685801($_smarty_tpl) {?><!DOCTYPE HTML>
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
