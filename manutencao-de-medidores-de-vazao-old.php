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
                    <ul class="servico historia">
                        
                        <li>    
                            <div>
                                <h1 class="title">
                                    Laboratório <br>
                                    <strong> de vazão Líquidos/Gases</strong>
                                </h1>
                
                                <span style="width: 450px;">
                                    O Laboratório de vazão blaster controles foi desenvolvido para atender o crescimento da empresa. Hoje o laboratório certifica todos os equipamentos fabricados pela blaster, e prestação de serviços de calibração para outros fabricantes que não possuem laboratório. <br>
                                    Escopo do Laboratório de vazão de líquidos:  <br>
                                     0,1 ~ 130.000 LPH com precisão de 0,15%. <br>
                                     Escopo do Laboratório de vazão de Gases: <br>
                                     1 ~ 420.000 NL/H com precisão de 0,35%.
                                </span>
                            </div>

                            <img src="assets/img/lab1.jpg" width="499" alt="">
                        </li>
                        <li> 
                            <div class="border-right">
                                <h1 class="title">
                                    <!-- Fábrica <br> -->
                                    <strong> Fábrica </strong>
                                </h1>
                
                                <span style="width: 370px;">
                                    Com o crescimento houve a necessidade de criar 4 setores: Vendas, Laboratório de vazão, Montagem e entre eles o setor de usinagem para garantir a qualidade e o prazo de entrega de nossos produtos. 
                                    <p><strong>A fábrica da Blaster Controles</strong> é equipada com dois tornos CNC, um torno mecânico, uma fresa, e um setor montagem dos equipamentos.</p>
                                </span>
                            </div>
                            <img src="assets/img/historia1.jpg" width="499" height="311" alt="" class="fright">
                        </li>

                    </ul>
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
<script> $("#nav > ul > li:eq(3) > a").addClass("active"); </script>
    
</body>
</html>