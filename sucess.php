<!DOCTYPE html>
<?php include "urlbase.php" ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> msg - Blaster Controles  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css">
    <META http-equiv="refresh" content="2;URL=https://www.blastercontroles.com.br/rotametros"> 
</head>

<body data-ng-app="app">
    <?php include "header.php" ?>
    
    <section id="contact">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "breadcrumb.php" ?>
                <?php include "sidebar.php" ?>

                <div id="myModal2" class="reveal-modal" style="visibility: visible;">
                    <a class="close-reveal-modal">&#215;</a>
                    <div>
                        <h1 class="title"><strong> Mensagem enviada com sucesso! </strong></h1>
                        <span style="font-size: 22px; font-weight: bold; line-height: 40px;">
                            Obrigado(a), logo retornaremos.                       
                        </span>
                    </div>
                </div>
                <div class="reveal-modal-bg" style="display: block; cursor: pointer;"></div>
                
            </div>
            <!-- full -->
        </div>
        <!-- center -->
    </section>
    <!-- content -->

    <?php include "form-budget.php" ?>
    
    
<?php include "footer.php" ?>
<script type="text/javascript" src="<?php echo $url ?>assets/js/ctrls/vp.js"></script> 

<script>
    $("#nav > ul > li:eq(2) > a").addClass("active");
    $("#sideBar > li:eq(0) > a").addClass("active");
</script>

    
</body>
</html>