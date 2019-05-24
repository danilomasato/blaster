<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="assets/css/application.css">
</head>
<body data-ng-app="app">
    <?php include "inc/header.php" ?>
    
    <section id="historia" ng-controller="homeController">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>
                <?php include "inc/sidebar-services.php" ?>


                <div class="content col-9-12">
                    

                   <form action="" method="post" id="formServicos" class="form">
                        <div>
                            <h1 class="title">
                            Faça um   
                            <strong> Orçamento </strong>
                            </h1>
                            <span>
                                Preencha o formulário abaixo para solicitar um orçamento. Todos os campos são obrigatórios.
                            </span>
                        </div>
                        <div class="box_form_servico">
                            <div class="txt_form_servicos">Empresa:</div>
                            <input name="empresa" type="text" id="empresa" class="objeto_servico" value="">
                        </div>
                        
                        <div class="box_form_servico">
                            <div class="txt_form_servicos">Telefone:</div>
                            <input name="ddd" type="text" id="ddd" class="ddd" value="">
                            <input name="telefone" type="text" id="telefone" class="tel" value="">
                        </div>
                        
                        <div class="box_form_servico">
                            <div class="txt_form_servicos">Contato:</div>
                            <input name="contato" type="text" id="contato" class="objeto_servico" value="">
                        </div>
                        
                        <div class="box_form_servico">
                            <div class="txt_form_servicos">E-mail:</div>
                            <input name="email" type="text" id="email" class="objeto_servico" value="">
                                        </div>
                        
                        <div class="box_form_servico">
                            <div class="txt_form_servicos">Tipo de Serviço:</div>
                            <input name="tipo_servico" type="text" id="tipo_servico" class="objeto_servico" value="">
                            <div class="txt_form_servicos_small">&nbsp;Ex: Calibração, Reparos em Equipamentos e Consertos</div>
                                        </div>
                        
                        <div class="box_form_servico">
                            <div class="txt_form_servicos">Tipo de Instrumento:</div>
                            <input name="tipo_instrumento" type="text" id="tipo_instrumento" class="objeto_servico" value="">
                            <div class="txt_form_servicos_small">&nbsp;Ex: Rotâmentro, Elétromagnético, Medidor de Vazão tipo turbina </div>
                                        </div>
                        
                        <div class="box_form_servico">
                            <div class="txt_form_servicos">Tipo de Fluído:</div>
                            <input name="tipo_fluido" type="text" id="tipo_fluido" class="objeto_servico" value="">
                            <div class="txt_form_servicos_small">&nbsp;Ex: Água, nitrogênio, etc... </div>
                                        </div>
                        
                        <div class="box_form_servico">
                            <div class="txt_form_servicos">Faixa de Vazão:</div>
                            <input name="tipo_vazao" type="text" id="tipo_vazao" class="objeto_servico" value="">
                            <div class="txt_form_servicos_small">Ex: 10 a 100LPH ou 5 a 50 M³/h</div>
                                        </div>
                        
                         <div class="box_form_servico">
                            <div class="txt_form_servicos">Temperatura de Processo:</div>
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
                        
                        <div class="box_form_servico">
                            <div class="txt_form_servicos">Fale o que acontece com seu equipamento:</div>
                            <input name="observacao" type="text" id="observacao" class="objeto_servico" value="">
                                        </div>
                        
                        <div class="box_form_servico">
                            <input type="submit" id="enviar" name="enviar" value=" Enviar " class="btn">
                        </div>
                    </form>

                </div>
                <!-- col left -->

                
            </div>
            <!-- full -->
        </div>
        <!-- center -->
    </section>
    <!-- content -->
    
    <!-- Btn Modal -->
    <!-- <a href="javascript:;" class="btn fleft" data-reveal-id="myModal"> modal </a> -->

<!--   <div id="myModal" class="reveal-modal">
       <h1 class="title">Title</h1>
       <a class="close-reveal-modal">&#215;</a>

       <table id="tableDDD" class="dataTable"></table>
  </div> -->

<?php include "inc/footer.php" ?>
<script> $("#nav > ul > li:eq(3) > a").addClass("active"); $("#sideBar > li:eq(0) > a").addClass("active"); </script>
    
</body>
</html>