<!DOCTYPE html>
<?php include "inc/urlbase.php" ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> história - Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css?v2">

    <!-- <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->
</head>
<body data-ng-app="app">
    <?php include "inc/header.php" ?>
    
    <section id="historia" ng-controller="homeController">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>

                <div class="content col-1-1">
                    <ul class="historia">
                        <li>    
                            <img src="assets/img/historia2.jpg" width="468" alt="">

                            <div>
                                <h1 class="title">
                                    nossa <br>
                                    <strong> história </strong>
                                </h1>
                
                                <span>
                                    Localizada em Interlagos São Paulo-SP, a Blaster Controles se destaca no mercado por ter seus produtos desenvolvidos e produzidos no Brasil. Além disso, são mais de 10 anos de experiência com Sistemas de Medição de Vazão e Controle de Fluxo. Prezamos pela qualidade e garantia dos produtos, prazo de entrega e atendimento aos clientes. 
                                </span>
                            </div>
                        </li>
                        <li> 
                            <img src="assets/img/prod1.jpg" height="311" width="499" alt="" class="fright">  
                            <div class="border-right">
                                <h1 class="title">
                                    Nossos <br>
                                    <strong>  Produtos </strong>
                                </h1>
                
                                <span>
                                    Nossos produtos são fabricados para atender indústria alimentícia, indústria química e petroquímica, sistema de tratamento de água e esgosto, usina de Álcool e Açucar, indústria farmacêutica, indústria automobilística, etc... 
                                </span>
                            </div>
                        </li>
                        <li>    
                            <img src="assets/img/lab1.jpg" width="468" alt="">

                            <div>
                                <h1 class="title">
                                    Laboratório <br>
                                    <strong> de vazão Líquidos/Gases</strong>
                                </h1>
                
                                <span style="width: 450px;">
                                    O Laboratório de vazão Blaster Controles foi desenvolvido para atender o crescimento da empresa. Hoje o laboratório certifica todos os equipamentos fabricados pela Blaster, e prestação de serviços de calibração para outros fabricantes que não possuem laboratório. <br>
                                    Escopo do Laboratório de vazão de líquidos:  <br>
                                     30 ~ 150.000 LPH com precisão de 0,15%. <br>
                                     Escopo do Laboratório de vazão de Gases: <br>
                                     1 ~ 420.000 NL/H com precisão de 0,35%.
                                </span>
                            </div>
                        </li>
                        <li> 
                            <img src="assets/img/historia1.jpg" width="499" height="311" alt="" class="fright">   
                            <div class="border-right">
                                <h1 class="title">
                                    <!-- Fábrica <br> -->
                                    <strong> Fábrica </strong>
                                </h1>
                
                                <span style="width: 370px;">
                                    Com o crescimento houve a necessidade ampliar os setores: Vendas, Laboratório de vazão, Montagem e entre eles o setor de usinagem para garantir a qualidade e o prazo de entrega de nossos produtos. 
                                    <p><strong>A fábrica da Blaster Controles</strong> é equipada com dois tornos CNC, um torno mecânico, uma fresadora, e um setor montagem dos equipamentos.</p>
                                </span>
                            </div>
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
<script> 
    document.querySelector('#nav > ul > li:nth-child(2) > a').classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = '<strong> história </strong>'
        el.innerHTML = newElement;
</script>
</body>
</html>