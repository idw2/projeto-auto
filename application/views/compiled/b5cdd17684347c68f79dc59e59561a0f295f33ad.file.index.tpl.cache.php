<?php /* Smarty version Smarty-3.1.19, created on 2015-03-18 07:29:27
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171863779455098bc73c24d3-57142771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5cdd17684347c68f79dc59e59561a0f295f33ad' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/index.tpl',
      1 => 1426536100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171863779455098bc73c24d3-57142771',
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
    'controle2' => 0,
    'zeros' => 0,
    'zero' => 0,
    'controle3' => 0,
    'seminovos' => 0,
    'seminovo' => 0,
    'controle4' => 0,
    'usados' => 0,
    'usado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55098bc7872f38_46461339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55098bc7872f38_46461339')) {function content_55098bc7872f38_46461339($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/auto.designlab.com.br/libraries/plugins/function.counter.php';
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
                    <h3 style="margin-top: 0;">Novidades</h3>
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
                            <h3 style="margin-top: 0;">Novidades</h3>
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




        <?php if ($_smarty_tpl->tpl_vars['controle2']->value) {?>
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-top: 20px;">Zero KM</h3>
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
                            <h3 style="margin-top: 20px;">Zero KM</h3>
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



        <?php if ($_smarty_tpl->tpl_vars['controle3']->value) {?>
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-top: 20px;">Seminovos</h3>
                    <div class="grid">
                        <div class="item-grid">
                            <div class="ribbon red"><span>Novo</span></div>
                            <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['seminovos']->value->URL_AMIGAVEL;?>
"><i class="icon-plus"></i></a>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['seminovos']->value->FOTO;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['seminovos']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['seminovos']->value->NOME;?>
">
                            <p><?php echo $_smarty_tpl->tpl_vars['seminovos']->value->NOME;?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['seminovos']->value->PRECO;?>
</span></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>

            <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
            <?php  $_smarty_tpl->tpl_vars['seminovo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seminovo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seminovos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seminovo']->key => $_smarty_tpl->tpl_vars['seminovo']->value) {
$_smarty_tpl->tpl_vars['seminovo']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value, null, 0);?> 
                <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

            <?php } ?>

            <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
            <?php  $_smarty_tpl->tpl_vars['seminovo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seminovo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seminovos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seminovo']->key => $_smarty_tpl->tpl_vars['seminovo']->value) {
$_smarty_tpl->tpl_vars['seminovo']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="margin-top: 20px;">Seminovos</h3>
                            <div class="grid">
                            <?php }?>
                            <div class="item-grid">
                                <div class="ribbon red"><span>Novo</span></div>
                                <a class="more" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/carros/detalhes/<?php echo $_smarty_tpl->tpl_vars['seminovo']->value['URL_AMIGAVEL'];?>
"><i class="icon-plus"></i></a>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['seminovo']->value['FOTO'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['seminovo']->value['NOME'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['seminovo']->value['NOME'];?>
">
                                <p><?php echo $_smarty_tpl->tpl_vars['seminovo']->value['NOME'];?>
 <span>$ <?php echo $_smarty_tpl->tpl_vars['seminovo']->value['PRECO'];?>
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



        <?php if ($_smarty_tpl->tpl_vars['controle4']->value) {?>
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-top: 20px;">Usados</h3>
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
                            <h3 style="margin-top: 20px;">Usados</h3>
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


        <!-- testimonials -->
        
        <!-- end testimonials -->

        <!-- sevices -->
        
        <!-- end sevices -->
    </div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
