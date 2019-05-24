<!DOCTYPE html>
<?php include "inc/urlbase.php" ?>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Rotâmetro bl - Blaster Controles  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css?v1">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css?v1">
    <link rel="canonical" href="http://www.blastercontroles.com.br/rotametro-bl.php" />
    <!-- <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->

    <meta name="description" content="Rôtametro BL é um instrumento utilizado para medir e controlar a vazão instantânea de fluxo para líquidos e gases em tubulações com condições de pressão e temperatura.">
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
                        <h1>Rotâmetro BL</h1>
                        <hr>

                        <img src="<?php echo $url ?>assets/img/rotametro.jpg" alt="rotametro bl" title="rotametro bl">
                        <div class="wrap">
                            <header>
                                <h2> Medidor de vazão tipo Rotâmetro BL </h2>
                                <span>
                                    Medidor de vazão instantânea de area variável, conhecido como dispositivo ou <strong>rotamtro bl</strong>, sua função é indicar volume em tempo real, sua aplicação é em instalações indústriais de distribuições de líquidos e gases, sendo um ótimo instrumento dentro da indústria alimentícia, tratamento térmico, saneamento e etc...

                                    <p>Quais os tipos de rotâmetros: </p>

                                    <ol class="list"> 
                                        <li>Rotâmetro termoplastico</li>
                                        <li>Rotâmetro metálico</li>
                                    </ol>                 
                                </span>
                            </header>
                            <span class="optional noMargin">
                                <strong> Opcional: </strong> alarme de alta e baixa vazão <br>
                                
                                <p>
                                    Faixa de vazão para gases de <strong class="number">1 NL/H – 3000 Nm³/H</strong> <br>
                                    Faixa de vazão para Líquidos de <strong class="number">0,2 L/H – 50000 L/H</strong> 
                                </p>

                                <strong>Perguntas frequentes sobre rotâmetros:</strong>
                                <p>
                                Quais são as taxas mínimas e máximas de vazão? <br>
                                Qual a temperatura mínima e máxima de trabalho? <br>
                                Qual é o diâmetro da linha onde o rotâmetro vai ser instalado? <br>
                                Qual a vazão de processo ou range do instrumento? <br>
                                Qual é a pressão máxima de trabalho?
                                </p>
                            </span>

                            <div class="catalogo-general full">
                                <div class="wrap">
                                    <a href="javascript:;" class="btn btn-budget fleft noMargin" data-reveal-id="myModal"> Solicitar Orçamento </a>
                                </div>
                            </div>
        
                            <div class="catalogo-general">
                                <h3> Catálogo em PDF </h3>
                                
                                <div class="wrap">
                                    <a href="<?php echo $url ?>assets/pdf/Medidor-de-Vazao-Tipo-Rotametro-BL.pdf" title="Catálogo Rotâmetros modelo bl" target="_blank" class="btn"> Visualize Aqui </a>
                                    <a href="<?php echo $url ?>assets/pdf/Medidor-de-Vazao-Tipo-Rotametro-BL.pdf" title="Catálogo Rotâmetros modelo bl" download="Medidor-de-Vazao-Tipo-Rotametro-BL.pdf" class="btn"> Baixe Aqui </a>
                                    
                                </div>
                            </div>
                            <!-- catalogo-general-->

                            <div class="catalogo-general catalogo-manual">
                                <h3> Manual </h3>
                                
                                <div class="wrap">
                                    <a href="<?php echo $url ?>assets/pdf/manuais/manual-de-montagem-bl-bli.pdf" title="Manual Rotâmetros modelo bl" target="_blank" class="btn"> Visualize Aqui </a>
                                    <a href="<?php echo $url ?>assets/pdf/manuais/manual-de-montagem-bl-bli.pdf" title="Manual Rotâmetros modelo bl" download="assets/pdf/manual-de-montagem-bl-bli.pdf" class="btn noMargin"> Baixe Aqui </a>
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
    document.querySelector('#sideBar > li:nth-child(3) .side-bar').children[0].children[0].classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = 'produtos / <strong> Rotâmetros </strong>'
        el.innerHTML = newElement;  
</script>

</body>
</html>