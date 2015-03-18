<?php /* Smarty version Smarty-3.1.19, created on 2015-03-17 10:26:59
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/resultados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1311367492550863e3b63d68-70851279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7491b292f730153f6658a9f28fcbb0284e13a560' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/resultados.tpl',
      1 => 1426527387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1311367492550863e3b63d68-70851279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controle1' => 0,
    'language' => 0,
    'resultados' => 0,
    'i' => 0,
    'resultado' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550863e3d2c0d6_23259982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550863e3d2c0d6_23259982')) {function content_550863e3d2c0d6_23259982($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/auto.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="bannercontainer" style="margin-top: -4%;margin-bottom: 4%;">
    <div class="banner ">
        <ul>                        
            <li data-transition="curtain-3" data-slotamount="1">
                <img src="/web-files/img/slider/slider01.jpg" alt="//" />
                <div 
                    class="caption lft " 
                    data-x="center"
                    data-y="bottom"
                    data-speed="1000"
                    data-start="500"
                    data-easing="easeOutBack"
                    >		
                    <a href="#">
                        <p>
                            <span>Oferta especial <span>&nbsp;</span></span>
                            New Fiesta 2015 &gt; A partir de  R$29.990
                        </p>
                    </a>
                </div>                                 
            </li>

            <li data-transition="curtain-3" data-slotamount="1">
                <img src="/web-files/img/slider/slider02.jpg" alt="//" />
                <div 
                    class="caption lft " 
                    data-x="center"
                    data-y="bottom"
                    data-speed="1000"
                    data-start="500"
                    data-easing="easeOutBack"
                    >
                    <a href="#">
                        <p>
                            <span>Oferta especial <span>&nbsp;</span></span>
                            Chevrolet Cruze &gt; A partir de  R$49.990
                        </p>
                    </a>
                </div>  
            </li> 

            <li data-transition="curtain-3" data-slotamount="1">
                <img src="/web-files/img/slider/slider03.jpg" alt="//" />
                <div 
                    class="caption lft " 
                    data-x="center"
                    data-y="bottom"
                    data-speed="1000"
                    data-start="500"
                    data-easing="easeOutBack"
                    >
                    <a href="#">
                        <p>
                            <span>Oferta especial <span>&nbsp;</span></span>
                            Corolla 2014 &gt; A partir de  R$48.990
                        </p>
                    </a>
                </div>                                    
            </li> 
        </ul>
    </div>
</div>

<section>
    <div class="container"><?php echo $_smarty_tpl->getSubTemplate ("filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
</div>
</section>

<section id="home">
    <div class="container">

        


        <?php if ($_smarty_tpl->tpl_vars['controle1']->value) {?>
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-top: 0;">Resultado</h3>
                    <div class="grid">
                        <div class="item-grid">
                            <div class="ribbon red"><span>Novo</span></div>
                            <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['resultados']->value->URL_AMIGAVEL;?>
"><i class="icon-plus"></i></a>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['resultados']->value->FOTO;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['resultados']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['resultados']->value->NOME;?>
">
                            <p><?php echo $_smarty_tpl->tpl_vars['resultados']->value->NOME;?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['resultados']->value->PRECO;?>
</span></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>

            <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
            <?php  $_smarty_tpl->tpl_vars['resultado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resultado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resultado']->key => $_smarty_tpl->tpl_vars['resultado']->value) {
$_smarty_tpl->tpl_vars['resultado']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["total"] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value, null, 0);?>
                <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

            <?php } ?>

            <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
            <?php  $_smarty_tpl->tpl_vars['resultado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resultado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resultado']->key => $_smarty_tpl->tpl_vars['resultado']->value) {
$_smarty_tpl->tpl_vars['resultado']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="margin-top: 0;">Resultados</h3>
                            <div class="grid">
                            <?php }?>
                            <div class="item-grid">
                                <div class="ribbon red"><span>Novo</span></div>
                                <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['resultado']->value['URL_AMIGAVEL'];?>
"><i class="icon-plus"></i></a>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['resultado']->value['FOTO'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['resultado']->value['NOME'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['resultado']->value['NOME'];?>
">
                                <p><?php echo $_smarty_tpl->tpl_vars['resultado']->value['NOME'];?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['resultado']->value['PRECO'];?>
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

</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
