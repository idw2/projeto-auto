{include file="header.tpl"}

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <!-- h1 e p que já tínhamos -->
            <h2>Ainda com dúvidas?</h2>
            <br/>
            <p><strong>E-mail:</strong><br />
                {$configuracao->EMAIL_FALECONOSCO}
            </p>
            <br/>
            <p><strong>Obs:</strong><br/>
                {$configuracao->OBS_FALECONOSCO}
            </p>

        </div> 

        <div class="col-md-6">


            <form class="ajax-form" action="" method="post">
                <div class="form-row">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="form-row">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-row row">
                    <div class="col-xs-4">
                        <input type="tel" class="form-control" id="ddd" name="ddd" placeholder="DDD">
                    </div>
                    <div class="col-xs-8">
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                    </div>
                </div>
                <div class="form-row">
                    <textarea class="form-control" placeholder="Mensagem" id="mensagem" name="mensagem" style="height: 100px;" required></textarea>
                </div>
                <div class="form-row">
                    <button type="button" class="btn btn-block btn-primary btn-lg" id="btn-send-proposta" style="margin: 0">Solicitar Orçamento</button><span id="visualizar"></span>
                </div>
            </form>
            <hr>

            <p style='line-height: 2.2em;'>{$endereco->LOGRADOURO}, {$endereco->NUMERO}<br>
                {if $endereco->COMPLEMENTO != "" && !is_array($endereco->COMPLEMENTO)}{$endereco->COMPLEMENTO}<br>{/if}    
                {$endereco->BAIRRO}<br />
                {$endereco->CIDADE}/{$endereco->UF}<br />
                CEP: {$endereco->CEP}</p>
            <p><a href="" style="font-size: 24px;letter-spacing: 0.04rem;font-weight: bold">{$configuracao->TELEFONE}</a><p>

        </div>
    </div>
</div>





{include file="footer.tpl"}