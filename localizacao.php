<!DOCTYPE html>
<?php include "inc/urlbase.php" ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Localização - Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css">

    <!-- <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css"> -->
</head>
<body data-ng-app="app">
    <?php include "inc/header.php" ?>
    
    <section id="historia" ng-controller="locationController">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>

                <div class="content col-1-1">

                    <form id="formLocation" method="post" action="index.html" class="form">
                        <div>
                            <h1 class="title">
                            Encontre a  
                            <strong> blaster </strong>
                            </h1>
                            <span>
                                Preencha o campo com o seu endereço
                            </span>
                        </div>
                      
                        <div>
                            <label for="txtEnderecoPartida">Endereço de partida:</label>
                            <input type="text" class="txtEnderecoPartida" id="txtEnderecoPartida" name="txtEnderecoPartida" />
                            <input type="submit" id="btnEnviar" class="btn" name="btnEnviar" value="Traçar Rota" />
                        </div>
                    </form>
        
                    <div id="mapa"></div>
                    <div id="trajeto-texto"></div>

                </div>
                <!-- col left -->

                
            </div>
            <!-- full -->
        </div>
        <!-- center -->
    </section>
    <!-- content -->

<?php include "inc/footer.php" ?>

<!-- Maps API Javascript -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script> 
document.querySelector('#nav > ul > li:nth-child(5) > a').classList.add('active');

    var el = document.querySelector('.breadcrumb > li:nth-child(2)'),
        elParent = el.parentNode,
        newElement = document.createElement('a');
        newElement = '<strong> Localização </strong>'
        el.innerHTML = newElement;
</script>
</body>
</html>