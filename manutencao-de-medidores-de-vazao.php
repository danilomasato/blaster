<!DOCTYPE html>
<?php include "inc/urlbase.php" ?>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title>Manutenção de Medidores de Vazão - Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css?v1">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css?v1">
<!-- 
     <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->
    
    <meta name="description" content="Manutenção de Medidores de Vazão, executamos manutenções e calibrações em medidores de vazão multimarca.">
    <meta name="keywords" content="Manutenção de Medidores de Vazão, Manutenções de Medidores de Vazão, Calibração de Medidor, rotâmetro, rotâmetros, medidor de vazão, medidores de vazão, calibração de medidores de vazão, medição de vazão" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="Copyright © 2016" />
    <link rel="canonical" href="www.blastercontroles.com.br/manutencao-de-medidores-de-vazao.php" />
</head>
<body data-ng-app="app">
    <?php include "inc/header.php" ?>
    
    <section id="contact" ng-controller="productsController">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>
                <?php include "inc/sidebar-services.php" ?>

                <div class="col-9-12" id="products-list">
                    <article>
                        <div class="product-img">
                            <img src="<?php echo $url ?>assets/img/manutencao-medidores-servicos.jpg" alt="Manutenção de Medidores de Vazão" title="Manutenção de Medidores de Vazão" width="200">
                        </div>

                        <div class="wrap">
                            <header>
                                <h1> Manutenção de <br> Medidores de Vazão </h1>
                                <span>
                                   A Blater Controles executa manutenções em medidores de vazão multimarcas.  
                                   
                                   <p>* Reparos em  medidores de vazão tipo rotâmetros. Se necessário subistituição de peças.</p>  
                                   * Reparos em Medidores de vazão Tipo Turbina. Se necessário subistituição de peças.  
                                   <p>* Reparos em Medidores de vazão mássico coriolis. Se necessário subistituição de peças.</p>  
                                   * Reparos em Medidores de vazão Eletromagnético. Se necessário subistituição de peças.
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
                                    <a href="<?php echo $url ?>assets/pdf/Medidor-de-Vazao-tipo-Turbina-BLLC.pdf" target="_blank" class="btn"> Visualize Aqui </a>
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
    document.querySelector('#sideBar li:nth-child(7) > a').classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = 'produtos / <strong> Manutenção de Medidores de Vazão </strong>'
        el.innerHTML = newElement;
</script>

    
</body>
</html>