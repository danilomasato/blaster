
<div id="myModal" class="reveal-modal">
       <a class="close-reveal-modal">&#215;</a>

       <form action="https://scripts.hospedagemdesites.ws/scripts/formmail.pl" method="post" id="formBudgetProduct" class="form">
            <!-- Abaixo, informe uma conta de email do domínio da hospedagem (email@domínio.com.br) -->
            <input type="hidden" name="email" value="vendas@blastercontroles.com.br"/>
             
            <!-- Informe a conta de emails que receberá os dados do formulário nele preenchido. --> 
            <!-- Dica: Para adicionar outro recipiente do formulário, separe as contas de email por virgula Ex.: value="email@dominio.com.br, podeseroutroemail@outrodomínio.com.br"  -->
            <input type="hidden" name="recipient" value="vendas@blastercontroles.com.br"/>
             
            <!-- Abaixo, informe o qual o assunto padrão da mensagem -->
            <input type="hidden" id="subject" name="subject" value="Or&#231;amento - Site"/>
             
            <!-- Nesta tag, informe o redirecionamento desejado, página principal do site, mensagem de agradecimento, etc -->
            <input type="hidden" name="redirect" value="https://www.blastercontroles.com.br/inc/sucess.php"/>

            <div>
                <h4 class="title">
                Faça um   
                <strong> Orçamento </strong>
                </h4>
                <span>
                    Preencha o formulário abaixo para solicitar um orçamento. Todos os campos são obrigatórios.
                </span>
            </div>

            <div class="col-1-2">
                <div class="box_form_servico">
                    <div class="txt_form_servicos">Empresa:</div>
                    <input name="empresa" type="text" id="empresa" class="objeto_servico" value="" placeholder="Digite o nome da Empresa...">
                </div>
                
                <div class="box_form_servico">
                    <div class="txt_form_servicos">Telefone:</div>
                    <input name="ddd" type="text" id="ddd" class="ddd" value="" placeholder="(ddd)">
                    <input name="telefone" type="text" id="telefone" class="tel" value="" placeholder="Digite seu Telefone...">
                </div>
                
                <div class="box_form_servico">
                    <div class="txt_form_servicos">Contato:</div>
                    <input name="contato" type="text" id="contato" class="objeto_servico" value="" placeholder="Digite o Contato...">
                </div>
                
                <div class="box_form_servico">
                    <div class="txt_form_servicos">E-mail:</div>
                    <input name="email" type="text" class="objeto_servico" value="" placeholder="Digite seu Email...">
                                </div>
                
                <div class="box_form_servico">
                    <div class="txt_form_servicos">Tipo de Orçamento:</div>
                    <select name="orcamento" id="typebudget">
                        <option value=""> Selecione... </option>
                        <option value="Cotação">Cotação</option>
                        <option value="Calibração">Calibração</option>
                        <option value="Reparos e Calibração">Reparos e Calibração</option>
                    </select>
                    <div class="txt_form_servicos_small">&nbsp;Ex: Calibração, Reparos em Equipamentos e Consertos</div>
                </div>

                <div class="box_form_servico">
                    <!-- <div class="txt_form_servicos">Tipo de Instrumento:</div> -->
                    <input name="tipo_instrumento" type="hidden" id="tipo_instrumento" class="objeto_servico" value="">
                    <!-- <div class="txt_form_servicos_small">&nbsp;Ex: Rotâmentro, Elétromagnético, Medidor de Vazão tipo turbina </div> -->
                </div>
                <div class="box_form_servico">
                    <div class="txt_form_servicos">Tipo de Fluído:</div>
                    <select name="fluido" class="fluido">
                        <option value=""> Selecione... </option>
                        <option value="Liquido">Liquido</option>
                        <option value="Gás">G&aacute;s</option>
                    </select> 
                    <input name="tipofluido" type="text" id="email" class="tipofluido" value="" placeholder="descreva o fluído...">
                </div>
            </div>    

            <div class="col-1-2">

                <div class="box_form_servico">
                    <div class="txt_form_servicos">Faixa de Vazão de Trabalho:</div>
                    <input name="tipo_vazao" type="text" id="tipo_vazao" class="objeto_servico" value="">
                    <div class="txt_form_servicos_small">Ex: 10 a 100LPH ou 5 a 50 M³/h</div>
                </div>
                
                 <div class="box_form_servico">
                    <div class="txt_form_servicos">Temperatura de Trabalho:</div>
                    <input name="temperatura" type="text" id="temperatura" class="objeto_servico" value="">
                    <div class="txt_form_servicos_small">&nbsp;Ex: 10ºC ou 50°C, etc</div>
                </div>
                
                <div class="box_form_servico">
                    <div class="txt_form_servicos">Pressão de Processo após o Medidor:</div>
                    <input name="pressao" type="text" id="pressao" class="objeto_servico" value="">
                </div>
                
                <div class="box_form_servico">
                    <div class="txt_form_servicos">Tipo de Conexão:</div>
                    <input name="tipo_conexao" type="text" id="tipo_conexao" class="objeto_servico" value="">
                    <div class="txt_form_servicos_small">&nbsp;Ex: Rosca ½" BSP, Flange ½" ANSI 150£, etc</div>
                </div>
                
                <div class="box_form_servico wrap-msg">
                    <div class="txt_form_servicos">Fale o que acontece com seu equipamento:</div>
                    <input name="observacao" type="text" id="observacao" class="msg" value="">
                </div>
                
                
            </div>

            <div class="col-1-1 col-btnForm">
                <div class="box_form_servico">
                    <input type="submit" id="enviar" name="enviar" value="Solicitar Orçamento" class="btn btn-green">
                </div>
            </div>
        </form>
  </div>

    <div id="certificado" class="reveal-modal">
       <a class="close-reveal-modal">&#215;</a>
       <img class="certificate-img" width="698" height="435" alt="certificado ISO/IEC 17025">
    </div>
