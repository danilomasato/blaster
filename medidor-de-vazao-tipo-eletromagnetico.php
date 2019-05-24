<?php include "inc/urlbase.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Medidor de Vazão tipo Eletromagnético - Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css">

    <!-- <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->
    <meta name="description" content="Medidor de vazão tipo Eletromagnético é um instrumento de indução Eletromagnética projetado pela lei de Faraday. isso leva esse instrumento como principal meio de medição de vazão dentro da indústria no mundo pelo seu custo.">
    <meta name="keywords" content="Eletromagnético, Medidor Eletromagnético, medidor tipo Eletromagnético, Medidor de Vazão Eletromagnético, magnético, Medidor de vazão tipo eletromagnético, Medidor de vazão magnético, Medidor de vazão tipo magnético, flowmeter." />  
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
                        <h1>Medidor de Vazão tipo Eletromagnético</h1>
                        <hr>

                        <img src="<?php echo $url ?>assets/img/medidor-de-vazao-tipo-eletromagnetico.jpg" alt="">
                        <div class="wrap">
                            <header>
                                <h2> Medidor de Vazão <br> Eletromagnético Modelo BLEM </h2>
                                <span>
                                    Medidor de vazão tipo Eletromagnético é um instrumento de indução Eletromagnética projetado pela lei de Faraday.
                                    Isso leva esse instrumento como principal meio de medição de vazão dentro da indústria no mundo. Pelo seu custo benefício.
                                    um dos mais precisos, e alcança uma precisão de 0,2% no ponto medido.

                                    <p>Medidor é um equipamento ou dispositivo de alta tecnologia para medir líquidos condutivos com ou sem particulas, viscosos ou não viscosos com muita precisão.
                                    Medidores Eletromagnéticos com certeza hoje podem ser o principais equipamentos da indústria nacional para medir a taxa de fluxos ou vazões. Lembrando que a vazão é a variável mais medida na indústria de modo geral. Sua necessidade existe desde a época dos antigos romanos. As primeiras medições de vazão na história foram feitas por egípcios e romanos.
                                    </p>
                                    
                                    O Medidor de vazão magnético, atende a um gigantesco número de aplicações
                                    como por exemplo: medição de vazão de iogurte, xaropes de glicose com
                                    alta concentração, cerveja e derivados, polpa de celulose, polpa de minério
                                    ácidos em geral, efluentes industriais, esgoto, lamas, pastas etc.
                                    
                                    Medidor Eletromagnético indicado para líquidos condutivos, com conexões de processo flangeados, wafer e sanitária.
                                </span>
                            </header>

                            <span class="optional">
                                <strong> tubulações de <strong class="number">¼” á 18”</strong>: </strong>
                                Sinal de saída: Pulso e <strong class="number">4 ~ 20</strong> ma (Padrão) <br> 
                                
                                <p><strong>atendendo as faixas de vazões:</strong> 
                                 de <strong class="number">0,03~1,01 M³/H</strong> à <strong class="number">190-5750 M³/h</strong></p> 
                            </span>

                            <div class="catalogo-general full">
                                <div class="wrap">
                                    <a href="javascript:;" class="btn btn-budget fleft noMargin" data-reveal-id="myModal"> Solicitar Orçamento </a>
                                </div>
                            </div>
        
                            <div class="catalogo-general">
                                <h3> Catálogo em PDF </h3>
                                
                                <div class="wrap">
                                    <a href="<?php echo $url ?>assets/pdf/Medidor-de-Vazao-Eletromagnetico-BLEM.pdf" target="_blank" class="btn"> Visualize Aqui </a>
                                    <a href="<?php echo $url ?>assets/pdf/Medidor-de-Vazao-Eletromagnetico-BLEM.pdf" download="Medidor-de-Vazao-Eletromagnetico-BLEM.pdf" class="btn"> Baixe Aqui </a>
                                    
                                </div>
                            </div>
                            <!-- catalogo-general -->

                            <div class="catalogo-general catalogo-manual">
                                <h3> Manual </h3>
                                
                                <div class="wrap">
                                    <a href="<?php echo $url ?>assets/pdf/manuais/manual-medidor-de-vazao-eletromagnetico-modelo-BLEM.pdf" target="_blank" class="btn"> Visualize Aqui </a>
                                    <a href="<?php echo $url ?>assets/pdf/manuais/manual-medidor-de-vazao-eletromagnetico-modelo-BLEM.pdf" download="manual-medidor-de-vazao-eletromagnetico-modelo-BLEM.pdf" class="btn noMargin"> Baixe Aqui </a>
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
    document.querySelector('#sideBar > li:nth-child(6) > a').classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = 'produtos / <strong> Medidor de vazão tipo Eletromagnético </strong>'
        el.innerHTML = newElement;
</script>

    
</body>
</html>