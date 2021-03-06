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
    
    <section id="contact" ng-controller="homeController">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>  

                <div class="endereco col-5-12">
                    <div class="full">
                        <h2 class="title"> Endereço </h2>

                        <span>
                            Blaster Sistema de Medição e Com LTDA. <br>
                            Rua Arnoldo Felmanas, <strong class="number">166</strong> - Veleiros <br>
                            São Paulo - SP - Brasil - CEP - <strong class="number">04774-010 </strong><br>
                        </span>
                        
                        <span class="tel number"><strong>Telefone</strong>: 55 (11) 2548 1500 / 55 (11) 2691 1500</span>
                    </div>
                    <div class="full">
                        <h2 class="title"> Email </h2>

                        <span>
                            vendas@blastercontroles.com.br
                        </span>
                    </div>
                    <div class="full">
                        <h2 class="title"> Horário de atendimento </h2>

                        <span>
                           De segunda a quinta das <strong class="number">8:00</strong> às <strong class="number">18:00</strong> e<br>
                            sexta das <strong class="number">8:00</strong> às <strong class="number">17:00</strong> 
                        </span>
                    </div>
                    <div class="full">
                        <h2 class="title"> Mapa </h2>

                        <span>
                           Encontre a blaster pelo mapa <br>
                           do google <a href="localizacao.php">Clique Aqui.</a>
                        </span>
                    </div>
                </div>

                <div class="col-7-12">
                     <h1 class="title">
                        Fale  
                        <strong> Conosco </strong>
                        </h1>
                        <span>
                            Preencha o formulário abaixo para entrar em contato com a Blaster Controles. <br>
                            Todos os campos são obrigatórios. <br>
                            Ou Através do email <strong>vendas@blastercontroles.com.br</strong> <br>
                            
                        </span>

                    <form action="inc/send.php" id="formContact" method="post" class="form">

                        <label for="">
                            Nome:
                            <input type="text" name="nome" id="nome">
                        </label>
                        <label for="">
                            email:
                            <input type="text" name="email" id="email">
                        </label>
                        <label for="">
                            Departamento:
                            <select name="departamento" id="departamento">
                                <option value="Vendas"> Vendas </option>
                                <option value="Serviços"> Serviços </option>
                                <option value="Assistência técnica"> Assistência técnica </option>

                            </select>
                        </label>
                         <label for="">
                            Assunto:
                            <input type="text" name="assunto" id="assunto">
                        </label>
                        <label for="">
                            Mensagem:
                            <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                        </label>

                        <input type="submit" class="btn">
                    </form>
                </div>
               
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
<script> $("#nav > ul > li:eq(7) > a").addClass("active"); </script>
    
</body>
</html>