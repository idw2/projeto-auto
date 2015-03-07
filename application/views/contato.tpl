{include file="header.tpl"}

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <!-- h1 e p que já tínhamos -->
            <h2>Ainda está com problemas?</h2>
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
            {*            <form id="contato" class="navbar-form navbar-left" style="width: 100%" action="/{$language}/contato" method="post">*}
            <form id="formulario" method="post" enctype="multipart/form-data">    
                {if $erro eq ""}

                {else}

                    {if $sucesso eq "FALSE"}
                        <div class="alert alert-danger" role="alert"><strong>Atenção: </strong>{$erro}</div>
                    {else}
                        <div class="alert alert-success" role="alert">{$erro}</div>	
                    {/if}
                {/if}

                <h2>Fale conosco</h2>
                <br/>
                <p>
                    <input type="hidden"id="site" name="site" maxlength="40" value="{$site}"/>
                    <input type="hidden"id="email_recipiente" name="email_recipiente" maxlength="40" value="{$configuracao->EMAIL_FALECONOSCO}"/>
                    <input type="hidden"id="alias" name="alias" maxlength="40" value="{if !is_array($configuracao->ALIAS)}{$configuracao->ALIAS}{/if}"/>
                    <input class="form-control" id="nome" name="nome" maxlength="40" value="" placeholder="Nome completo"/>
                </p>
                <p><input type="email" class="form-control" id="email" name="email" maxlength="70" value="" placeholder="E-mail"/></p>
                <p><input class="form-control" id="assunto" name="assunto" maxlength="70" value="" placeholder="Assunto"/></p>
                <p><textarea class="form-control" rows="5" id="mensagem" name="mensagem">{$mensagem}</textarea></p>
                <p><span type="buttom" class="btn red" name="enviar" id="btn-send-contato">ENVIAR</span> <span id="visualizar"></span></p>

            </form>
        </div>
    </div>
</div>
<div style="clear: both;"></div>

{include file="footer.tpl"}
