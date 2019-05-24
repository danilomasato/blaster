<!DOCTYPE html>
<?php include "inc/urlbase.php" ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Calibração de Medidor de Vazão de Gás - Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css?v1">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css?v1">

<!--      <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->
    
    <meta name="description" content="Calibração de Medidores de Vazão para gases, executamos calibrações em medidores de vazão multimarca.">
    <meta name="keywords" content="Calibração de Medidores de Vazão, Calibração de Medidor de Vazão em Campo, rotâmetro, rotâmetros, medidor de vazão, medidores de vazão, calibração de medidores de vazão, medição de vazão" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
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
    <link rel="canonical" href="http://www.blastercontroles.com.br/calibracao-de-medidor-de-vazao-de-gas.php" />
</head>
<body>
    <?php include "inc/header.php" ?>
    
    <section id="contact" ng-controller="productsController">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>
                <?php include "inc/sidebar-services.php" ?>

                <div class="col-9-12" id="products-list">
                    <article>
                        <div class="product-img">
                            <img src="assets/img/calibracao-de-medidor-de-vazao-de-liquidos.jpg" alt="" width="200">
                        </div>

                        <div class="wrap">
                            <header>
                                <h3> Calibração de <br> Medidor de Vazão de Gás <br> Rastreado RBC</h3>
                                <span>
                                   <p>A Blater Controles executa calibrações em medidores de vazão multimarcas.</p> 

                                   Atendendo dentro da faixa de vazão de 50 ~ 420.000 NL/H. 

                                   <p>
                                     A Calibração dos medidores de Vazão é garantido por um "master meter", onde um sistema coleta os pulsos do padrão e do medidor a ser calibrado. O sistema garante uma precisão entre 0,5% de erro medido do ponto e utiliza 4 métodos: Vazão volumétrica, vazão massica, totalização de massa e totalização de volume. 
                                   </p> 

                                   Hoje existe o procedimento para calibração dos medidores relacionados abaixo:

                                    <p>* Calibração em medidores de vazão tipo Rotâmetros. </p>  
                                       * Calibração em medidores de vazão tipo Turbina. 
                                    <p>* Calibração em medidores de vazão Mássico Thermal. </p>
                                       * Calibração em medidores de vazão tipo Vortex.
                                    <p>* Instrumento totalizador de Volume. </p> 
                                       * Instrumento totalizador de Massa.  
                                    <p>* Instrumento totalizador de Vazão.  </p> 

                                </span>
                            </header>
                        
                            <div class="catalogo-general full">
                                <div class="wrap">
                                    <a href="javascript:;" class="btn btn-budget fleft noMargin" data-reveal-id="myModal"> Solicitar Orçamento </a>
                                </div>
                            </div>
        
                            <!-- <div class="catalogo-general">
                                <h3> Catálogo em PDF </h3>
                                
                                <div class="wrap">
                                    <a href="assets/pdf/Medidor-de-Vazao-tipo-Turbina-BLLC.pdf" target="_blank" class="btn"> Visualize Aqui </a>
                                </div>
                            </div> -->
                            <!-- catalogo-general -->
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
    document.querySelector('#nav > ul > li:nth-child(4) > a').classList.add('active');
    document.querySelector('#sideBar li:nth-child(4) > a').classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = 'produtos / <strong> Calibração de Medidor de Vazão de Gás </strong>'
        el.innerHTML = newElement;
</script>

    
</body>
</html>