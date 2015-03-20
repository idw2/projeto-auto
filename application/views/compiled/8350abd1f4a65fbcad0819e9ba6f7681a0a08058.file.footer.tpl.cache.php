<?php /* Smarty version Smarty-3.1.19, created on 2015-03-18 07:29:27
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37828761155098bc7ccb791-88623232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8350abd1f4a65fbcad0819e9ba6f7681a0a08058' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/footer.tpl',
      1 => 1426095463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37828761155098bc7ccb791-88623232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuracao' => 0,
    'endereco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55098bc7e1ec44_91329324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55098bc7e1ec44_91329324')) {function content_55098bc7e1ec44_91329324($_smarty_tpl) {?><footer>

            <!-- begin middle Footer -->
            <div class="middlefoot">
                <div class="container">
                    <div class="row bread-top">
                        <div class="col-xs-6 breadcrumbs">
                            Você está aqui: <a href="#">Home</a>
                        </div>
                        <div class="col-xs-6 go-top">
                            <a href="#" id="go-top">Para o topo <i class="icon-up-open"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 about">
                            <h2>Contato</h2>
                            <p>Ligue: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->TELEFONE;?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->LOGRADOURO;?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->NUMERO;?>
<br>
                            <?php if ($_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO!=''&&!is_array($_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO)) {?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO;?>
<br><?php }?>    
                            <?php echo $_smarty_tpl->tpl_vars['endereco']->value->BAIRRO;?>
<br />
                            <?php echo $_smarty_tpl->tpl_vars['endereco']->value->CIDADE;?>
/<?php echo $_smarty_tpl->tpl_vars['endereco']->value->UF;?>
<br />
                            CEP: <?php echo $_smarty_tpl->tpl_vars['endereco']->value->CEP;?>
</p>

                        </div>

                        

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h2>Veículos</h2>
                            <ul>
                                <li><i class="icon-plus"></i><a href="#">Populares</a></li>
                                <li><i class="icon-plus"></i><a href="#">Hacth</a></li>
                                <li><i class="icon-plus"></i><a href="#">Sedans</a></li>
                                <li><i class="icon-plus"></i><a href="#">Pickups</a></li>
                                <li><i class="icon-plus"></i><a href="#">Motos</a></li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h2>Serviços</h2>
                            <ul>
                                <li><i class="icon-plus"></i><a href="#">Semi novos</a></li>
                                <li><i class="icon-plus"></i><a href="#">Venda seu carro</a></li>
                                <li><i class="icon-plus"></i><a href="#">Financiamento</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h2>Horário de funcionamento</h2>
                            <ul class="hours">
                                
                                
                                <li><span class="icon"><i class="icon-clock"></i></span>De Segunda à Sexta<span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['configuracao']->value->SEG_SEX_INICIO;?>
 - <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->SEG_SEX_FIM;?>
</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Sábados<span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['configuracao']->value->SABADO_INICIO;?>
 - <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->SABADO_FIM;?>
</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Domingos<span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['configuracao']->value->DOMINGO_INICIO;?>
 - <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->DOMINGO_FIM;?>
</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Feriados<span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['configuracao']->value->FERIADO_INICIO;?>
 - <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->FERIADO_FIM;?>
</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end middle Footer -->

            <!-- begin bottom Footer -->
            <div class="bottomfoot">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="copy">Desenvolvido por <a href="http://www.designlab.com.br" target="_blank">DesignLab</a> - &copy; 2015 Todos os direitos reservados</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <ul class="social">



                                
                                <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->GOOGLE_PLUS)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->GOOGLE_PLUS;?>
" target="_blank" class="gplus"><i class="icon-gplus"></i></a></li>
                                <?php }?>
                                <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->LINKEDID)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->LINKEDID;?>
" target="_blank" class="linkedin"><i class="icon-linkedin"></i></a></li>
                                <?php }?>
                                <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->TWITTER)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->TWITTER;?>
" target="_blank" class="twitter"><i class="icon-twitter"></i></a></li>
                                <?php }?>
                                <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->FACEBOOK)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->FACEBOOK;?>
" target="_blank" class="facebook"><i class="icon-facebook"></i></a></li>
                                <?php }?>
                                <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->INSTAGRAM)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->INSTAGRAM;?>
" target="_blank" class="instagram"><i class="icon-instagram"></i></a></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- begin bottom Footer -->
        </footer>


        <!-- Javascript Files -->

        <!-- jQuery -->



        <script src="/web-files/js/jquery-2.1.1.min.js"></script>
        <!-- Respond.js media queries for IE8 -->
        <script src="/web-files/js/respond.min.js"></script>

        <!-- Bootstrap-->
        <script src="/web-files/js/bootstrap.min.js" ></script>

        <!-- Retina.js -->


        <!-- Placeholder.js http://widgetulous.com/placeholderjs/ -->
        <script src="/web-files/js/placeholder.js" ></script>

        <!-- Go to top -->
        <script src="/web-files/js/jquery.scrollTo-1.4.3.1-min.js" ></script>

        <!-- Slider Revolution -->
        <script src="/web-files/plugins/revolution/js/jquery.themepunch.plugins.min.js"></script>
        <script src="/web-files/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
        
        <!-- Slider -->
        <script src="/web-files/js/woothemes-FlexSlider-ce5441b/jquery.flexslider-min.js"></script>

        <!-- Custom -->
        <script src="/web-files/js/script.js"></script>

        <!-- End Javascript Files -->
        
       


    </body>
</html><?php }} ?>
