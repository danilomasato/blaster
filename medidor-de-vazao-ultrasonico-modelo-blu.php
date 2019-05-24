<?php include "inc/urlbase.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css">

    <!-- <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->
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
                        <img src="<?php echo $url ?>assets/img/medidor-de-vazao-ultrasonico-modelo-blu.jpg" alt="">
                        
                        <div class="wrap">
                            <header>
                                <h3> Medidor de Vazão Ultrassônico Modelo BLU </h3>
                                <span>
                                   Medidor ultrassônico de vazão portátil modelo BLU, não instrutivo, 
                                   completo com sensores Clamp-on e maleta para transporte.
                                </span>
                            </header>

                            <span class="optional">
                                <strong> Precisão: </strong> <strong class="number"> ±2,0% </strong><br>
                                
                                <strong> Repitibilidade: </strong> <strong class="number"> ±2,0% </strong><br>
                                <strong> Fluídos aceitáveis: </strong> Líquidos <br>
                                <strong> Temperatura do Sensores: </strong> Até <strong class="number"> 80ºC. </strong> <br><br>
                                <strong> Atende tubulações: </strong> 
                                Sensor Pequeno:   de <strong class="number"> ½” à 4”. </strong> <br>
                                Sensor Grande:   de <strong class="number"> 2” à 28”. </strong> <br>
                            </span>

                            <div class="catalogo-general full">
                                <div class="wrap">
                                    <a href="javascript:;" class="btn btn-budget fleft noMargin" data-reveal-id="myModal"> Solicitar Orçamento </a>
                                </div>
                            </div>
        
                            <div class="catalogo-general">
                                <h3> Catálogo em PDF </h3>
                                
                                <div class="wrap">
                                    <a href="<?php echo $url ?>assets/pdf/medidor-de-vazao-ultrasonico-BLU.pdf" target="_blank" class="btn"> Visualize Aqui </a>
                                    <a href="javascript:;" class="btn"> Baixe Aqui </a>
                                    
                                </div>
                            </div>
                            <!-- catalogo-general -->

                            <!-- <div class="catalogo-general catalogo-manual">
                                <h3> Manual </h3>
                                
                                <div class="wrap">
                                    <a href="javascript:;" class="btn"> Visualize Aqui </a>
                                    <a href="javascript:;" class="btn noMargin"> Baixe Aqui </a>
                                </div>
                            </div> -->
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
    document.querySelector('#sideBar > li:nth-child(11) > a').classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = 'produtos / <strong> Medidor de vazão Ultrassônico </strong>'
        el.innerHTML = newElement;
</script>

    
</body>
</html>