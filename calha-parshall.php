<?php include "inc/urlbase.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Medidor de Vazão Tipo Calha Parshall - Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css">

    <!-- <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->
    <meta name="description" content="Medidor de Vazão Tipo Calha Parshall conhecido tradicionalmente para medir vazão em canais abertos, sua aplicação é quando se tem um canal e é necessário monitorar vazão instântanea.">
    <meta name="keywords" content="Calha Parshall, medidor Calha Parshall, medidor tipo Calha Parshall, medidor de vazão tipo Calha Parshall, medidor de vazão Calha Parshall" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="Copyright © 2016" />
    <meta name="rating" content="Geral">
    <meta name="expires" content="never">
    <meta name="language" content="portuguese">
    <meta name="distribution" content="global">
    <meta name="author" content="Danilo Masato">
    <meta name="city" content="São Paulo">
    <meta name="State" content="São Paulo">
    <meta name="Country" content="Brazil">
</head>
<body data-ng-app="app">
    <?php include "inc/header.php" ?>
    
    <section id="contact" ng-controller="productsController">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>
                <?php include "inc/sidebar.php" ?>

                <div class="col-9-12" id="products-list">
                    <article>
                        <h1>Medidor de Vazão Tipo Calha Parshall</h1>
                        <hr>
                        
                            <img src="<?php echo $url ?>assets/img/calha-parshall.jpg" alt="Calha Parshall">
                            <div class="wrap">
                                <header>
                                    <h2> medidor tipo Calha Parshall ISBL </h2>
                                    <span class="optional">
                                       O medidor Calha Parshall, é um instrumento apto a medir grandes vazões de líquidos com ou sem particulas de quaisquer tipos de fluídos em canais abertos.
                                        Com condições de pressão e temperaturas extremas, 
                                        dentro dos limites de resistência do material de fabricação da Calha Parshall, 
                                        em fibra de vidro.

                                        <p>
                                           O que é <b>calha parshall</b>? <br>
                                           A calha parshall é um sistema convencional de medição que passa por uma "garganta" graduada que pode ter de 1" ~ 120"
                                        </p>

                                        Quando a <b>calha parshall</b> é indicada? <br>

                                        Sua indicação é para medir vazão instantânea em canais abertos, seja eles: rios, sistema de tratamento de água e esgosto e etc.
                                        podendo ser adaptado um sistema de nível ultrassônico para indicar e totalizar a vazão.
  
                                        Calha parshall é um dispositivo conhecido tradicionalmente para medir vazão em canais abertos, sua aplicação é quando se tem um canal e é necessário monitorar vazão instântanea, e totalização de uma estação de tratamento de água ou esgosto de uma indústria ou pedrial, e etc...

                                        Sua aplicação é para garantir e controlar o fluxo de líquido tratado ou não tratado. Sua calibração pode ser feita com uma régua calibrada ou conhecida como uma escala.
                                        O Laboratório de vazão rastreado rbc de líquidos e gases, está capacitado e implementado o sistema de qualidade ISO/IEC 17025 - 2005.
                                    </span>
                                </header>

                                <span class="optional">
                                    <strong> Tamanho da "Garganta"  </strong>
                                    de <strong class="number">1”-120”</strong> atendendo a vazões de <strong class="number">0,11-8300 LPS.</strong> <br> 
                                </span>

                                <div class="catalogo-general full">
                                    <div class="wrap">
                                        <a href="javascript:;" class="btn btn-budget fleft noMargin" data-reveal-id="myModal"> Solicitar Orçamento </a>
                                    </div>
                                </div>
            
                                <div class="catalogo-general">
                                    <h3> Catálogo em PDF </h3>
                                    
                                    <div class="wrap">
                                        <a href="<?php echo $url ?>assets/pdf/Calha-Pashall.pdf" target="_blank" class="btn"> Visualize Aqui </a>
                                        <a href="<?php echo $url ?>assets/pdf/Calha-Pashall.pdf" download="Medidor-de-vazao-Tipo-Calha-Pashall-ISBL.pdf" class="btn"> Baixe Aqui </a>   
                                    </div>
                                </div>
                                <!-- catalogo-general -->

                                <div class="catalogo-general catalogo-manual">
                                    <h3> Manual </h3>
                                    
                                    <div class="wrap">
                                        <a href="<?php echo $url ?>assets/pdf/manuais/manual-calha-parshall.pdf" target="_blank" class="btn"> Visualize Aqui </a>
                                        <a href="<?php echo $url ?>assets/pdf/manuais/manual-calha-parshall.pdf" download="manual-de-montagem-isbl.pdf" class="btn noMargin"> Baixe Aqui </a>
                                    </div>
                                </div>
                                <!-- catalogo-manual -->
                        
                            </div>
                    </article>
                </div>
                <!-- col right -->
                
            </div>
            <!-- full -->
        </div>
        <!-- center -->
    </section>
    <!-- content -->
    
    <?php include "inc/form-budget.php" ?>

<?php include "inc/footer.php" ?> 
<script>
    document.querySelector('#nav > ul > li:nth-child(3) > a').classList.add('active');
    document.querySelector('#sideBar > li:nth-child(5) > a').classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = 'produtos / <strong> Medidor de vazão tipo calha parshall </strong>'
        el.innerHTML = newElement;
</script>

    
</body>
</html>