<?php include "inc/urlbase.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Medidor de Vazão tipo Vortex - Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css">

    <!-- <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->
    <meta name="keywords" content="Vortex, medidor Vortex, medidor tipo Vortex, medidor de vazão tipo Vortex, medidor de vazão Vortex" />
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
                        <h1>Medidor de Vazão tipo Vortex</h1>
                        <hr>
                        
                        <div class="product-img">
                            <img src="<?php echo $url ?>assets/img/medidor-de-vazao-tipo-vortex-modelo-blvn.jpg" alt="Medidor de Vazão tipo Vortex" title="Medidor de Vazão tipo Vortex">
                            <img src="<?php echo $url ?>assets/img/eletronica-Remota.jpg" alt="eletrônica Remota" title="eletrônica Remota">
                        </div>
                        <div class="wrap">
                            <header>
                                <h3> Medidor tipo vortex Modelo BLVN </h3>
                                <span>
                                   O Medidor Vortex, foi desenvolvido para a medição de vazão de líquidos
                                    limpos em tubulações fechadas, sendo fabricado totalmente em material termoplástico.
                                    Seu funcionamento é baseado na medição de velocidade do fluído a partir da
                                    quantidade de vórtices formados quando o líquido passa por um pequeno objeto
                                    que cruza o interior do tubo.
                                </span>
                            </header>

                            <span class="optional">

                                <strong> Fluídos compatíveis/ Líquidos: </strong>

                                Água, Refrigerante, Álcool, Soluções Aquosas. <br>
                            
                                <p>
                                    <strong>Fluídos compatíveis/gás: </strong>
                                    Gás: Ar, N2, O<strong class="number">2</strong>, Argônio e Gás Úmido
                                </p>

                                <p>
                                    <strong>Conexão: </strong>
                                    Rosca <strong class="number">3/8’’ 1/2" 3/4' 1" 1.1/4" </strong>
                                </p>
                                
                                Precisão: <strong class="number"> ±1% </strong>
                                 
                            </span>

                            <div class="catalogo-general full">
                                <div class="wrap">
                                    <a href="javascript:;" class="btn btn-budget fleft noMargin" data-reveal-id="myModal"> Solicitar Orçamento </a>
                                </div>
                            </div>
        
                            <div class="catalogo-general">
                                <h3> Catálogo em PDF </h3>
                                
                                <div class="wrap">
                                    <a href="<?php echo $url ?>assets/pdf/medidor-de-vazao-deslocamento-positivo-BLVN.pdf" target="_blank" class="btn"> Visualize Aqui </a>
                                    <a href="<?php echo $url ?>assets/pdf/medidor-de-vazao-deslocamento-positivo-BLVN.pdf" download="medidor-de-vazao-deslocamento-positivo-BLVN.pdf" class="btn"> Baixe Aqui </a>
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
    document.querySelector('#sideBar > li:nth-child(10) > a').classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = 'produtos / <strong> Medidor de vazão tipo Vortex </strong>'
        el.innerHTML = newElement;
</script>

    
</body>
</html>