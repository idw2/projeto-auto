<footer>

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
                            <p>Ligue: {$configuracao->TELEFONE}</p>
                            <p>{$endereco->LOGRADOURO}, {$endereco->NUMERO}<br>
                            {if $endereco->COMPLEMENTO != "" && !is_array($endereco->COMPLEMENTO)}{$endereco->COMPLEMENTO}<br>{/if}    
                            {$endereco->BAIRRO}<br />
                            {$endereco->CIDADE}/{$endereco->UF}<br />
                            CEP: {$endereco->CEP}</p>
{*                            <a href="#">Ver mapa</a>*}
                        </div>

                        {*<div class="col-xs-12 col-sm-6 col-md-3">
                            <h2>Últimas Notícias</h2>

                            <div class="recent-news">
                                <div>
                                    <div class="post-icon"><i class="icon-pencil"></i></div>
                                    <img src="/web-files/img/footer-thumbnail-news/recent1.jpg" alt="//" />
                                </div>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                                <span>Mai 12, 2014 por Editor</span>
                            </div>
                            <div class="recent-news">
                                <div>
                                    <div class="post-icon"><i class="icon-pencil"></i></div>
                                    <img src="/web-files/img/footer-thumbnail-news/recent2.jpg" alt="//" />
                                </div>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                                <span>Mai 12, 2014 por Editor</span>
                            </div>
                            <div class="recent-news">
                                <div>
                                    <div class="post-icon"><i class="icon-pencil"></i></div>
                                    <img src="/web-files/img/footer-thumbnail-news/recent3.jpg" alt="//" />
                                </div>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                                <span>Mai 12, 2014 por Editor</span>
                            </div>
                        </div>*}

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
                                {*<li><span class="icon"><i class="icon-clock"></i></span>Segunda<span class="pull-right">06.00 - 22.00</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Terça<span class="pull-right">06.00 - 22.00</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Quarta<span class="pull-right">06.00 - 22.00</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Quinta<span class="pull-right">06.00 - 22.00</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Sexta<span class="pull-right">06.00 - 21.00</span></li>*}
                                
                                <li><span class="icon"><i class="icon-clock"></i></span>De Segunda à Sexta<span class="pull-right">{$configuracao->SEG_SEX_INICIO} - {$configuracao->SEG_SEX_FIM}</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Sábados<span class="pull-right">{$configuracao->SABADO_INICIO} - {$configuracao->SABADO_FIM}</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Domingos<span class="pull-right">{$configuracao->DOMINGO_INICIO} - {$configuracao->DOMINGO_FIM}</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Feriados<span class="pull-right">{$configuracao->FERIADO_INICIO} - {$configuracao->FERIADO_FIM}</span></li>
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
{*                                <li><a href="#" class="instagram"><i class="icon-instagram"></i></a></li>*}
{*                                <li><a href="#" class="vimeo"><i class="icon-vimeo"></i></a></li>*}
{*                                <li><a href="#" class="pinterest"><i class="icon-pinterest"></i></a></li>*}
                                
                                {if !is_array($configuracao->GOOGLE_PLUS) }
                                    <li><a href="{$configuracao->GOOGLE_PLUS}" target="_blank" class="gplus"><i class="icon-gplus"></i></a></li>
                                {/if}
                                {if !is_array($configuracao->LINKEDID) }
                                    <li><a href="{$configuracao->LINKEDID}" target="_blank" class="linkedin"><i class="icon-linkedin"></i></a></li>
                                {/if}
                                {if !is_array($configuracao->TWITTER)}
                                    <li><a href="{$configuracao->TWITTER}" target="_blank" class="twitter"><i class="icon-twitter"></i></a></li>
                                {/if}
                                {if !is_array($configuracao->FACEBOOK)}
                                    <li><a href="{$configuracao->FACEBOOK}" target="_blank" class="facebook"><i class="icon-facebook"></i></a></li>
                                {/if}
                                {if !is_array($configuracao->INSTAGRAM)}
                                    <li><a href="{$configuracao->INSTAGRAM}" target="_blank" class="instagram"><i class="icon-instagram"></i></a></li>
                                {/if}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- begin bottom Footer -->
        </footer>


        <!-- Javascript Files -->

        <!-- jQuery -->
{*        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>*}
{*        <script>window.jQuery || document.write("<script src=\"/web-files/js/jquery-1.9.1.min.js\"")</script>*}

        <script src="/web-files/js/jquery-2.1.1.min.js"></script>
        <!-- Respond.js media queries for IE8 -->
        <script src="/web-files/js/respond.min.js"></script>

        <!-- Bootstrap-->
        <script src="/web-files/js/bootstrap.min.js" ></script>

        <!-- Retina.js -->
{*        <script src="/web-files/js/retina.js" ></script>*}

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
</html>