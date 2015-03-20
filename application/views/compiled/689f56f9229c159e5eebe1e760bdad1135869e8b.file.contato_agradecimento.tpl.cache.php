<?php /* Smarty version Smarty-3.1.19, created on 2015-03-17 07:58:21
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/emails/contato_agradecimento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9792277035508410db8f861-39028587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '689f56f9229c159e5eebe1e760bdad1135869e8b' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/emails/contato_agradecimento.tpl',
      1 => 1422884681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9792277035508410db8f861-39028587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5508410dc68a70_21714620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508410dc68a70_21714620')) {function content_5508410dc68a70_21714620($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre style="font-size: 20px;">
            <p>Obrigado <?php echo $_smarty_tpl->tpl_vars['view_nome']->value;?>
 pelo contato, em breve estaremos respondendo a sua mensagem!</p>
            <p></p>
            <p></p>
            <p><b>* Não responder esta mensagem!</b></p>
        </pre>
    </body>
</html><?php }} ?>
