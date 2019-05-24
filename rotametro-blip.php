<!DOCTYPE html>
<?php include "inc/urlbase.php" ?>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Rotâmetro blip - Blaster Controles  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css?v1">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css?v1">
    <link rel="canonical" href="http://www.blastercontroles.com.br/rotametro-blip.php" />
<!--<link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->

    <meta name="description" content="Rôtametro BLIP é um instrumento utilizado para medir grandes vazões e controlar a vazão instantânea de fluxo para líquidos  em tubulações ascendente, descendente ou horizontal.">
    <meta name="keywords" content="rotâmetro, rotâmetros, rotametro, rotametros, medidor de vazão tipo rotametro, rotâmetro para agua, rotâmetro para gases, calibração em rotametro, calibração de rotâmetro" />
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

<body>
    <?php include "inc/header.php" ?>
    
    <section id="products">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>
                <?php include "inc/sidebar.php" ?>

                <div class="col-9-12" id="products-list">
                    <article>
                        <h1>Rotâmetro BLIP</h1>
                        <hr>
                        
                        <img src="<?php echo $url ?>assets/img/rotametro-blip.jpg" alt="Rotâmetro blip" title="Rotâmetro blip">
                        <div class="wrap">
                            <header>
                                <h1> Medidor de vazão tipo Rotâmetro BLIP </h1>
                                <span>
                                  Rotâmetros BLIP, São da classe de medidores da vazão de área variável utilizado para medir e controlar o fluxo de uma linha de fluído.
                                  no qual o fluído escoa em qual quer sentido seja ele ascendente/descendente ou fluxo para esquerda ou para direita.
                                  Ele é composto por um rotâmetro e uma placa de orifício, e seu princípio de funcionamento é por pressão diferencial.
                                </span>
                            </header>

                            <span class="optional">
                                <strong> Opcional: </strong> alarme de alta e baixa vazão <br>

                                Faixa de Vazão: <strong class="number">1,0~10</strong> até <strong class="number">400 M³/H</strong>. 
                            </span>

                            <div class="catalogo-general full">
                                <div class="wrap">
                                    <a href="javascript:;" class="btn btn-budget fleft noMargin" data-reveal-id="myModal"> Solicitar Orçamento </a>
                                </div>
                            </div>
        
                            <div class="catalogo-general">
                                <h3> Catálogo em PDF </h3>
                                
                                <div class="wrap">
                                    <a href="<?php echo $url ?>assets/pdf/Medidor-de-Vazao-Tipo-Rotametro-Modelo-BLIP.pdf"  title="Catálogo Rotâmetros modelo blip" target="_blank" class="btn"> Visualize Aqui </a>
                                    <a href="<?php echo $url ?>assets/pdf/Medidor-de-Vazao-Tipo-Rotametro-Modelo-BLIP.pdf"  title="Catálogo Rotâmetros modelo blip" download="Medidor-de-Vazao-Tipo-Rotametro-Modelo-BLIP.pdf" class="btn"> Baixe Aqui </a>
                                </div>
                            </div>
                            <!-- catalogo-general -->

                            <div class="catalogo-general catalogo-manual">
                                <h3> Manual </h3>
                                
                                <div class="wrap">
                                    <a href="<?php echo $url ?>assets/pdf/manuais/manual-de-montagem-blip.pdf"  title="Manual Rotâmetros modelo blip" target="_blank" class="btn"> Visualize Aqui </a>
                                    <a href="<?php echo $url ?>assets/pdf/manuais/manual-de-montagem-blip.pdf"  title="Manual Rotâmetros modelo blip" download="Medidor-de-Vazao-Tipo-Rotametro-Modelo-BLIP.pdf" class="btn noMargin"> Baixe Aqui </a>
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
    document.querySelector('#sideBar > li:nth-child(3) .side-bar').children[2].children[0].classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = 'produtos / <strong> Rotâmetros </strong>';
        el.innerHTML = newElement;  
</script> 
</body>
</html>