<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="assets/css/application.css">
</head>
<body data-ng-app="app">
    <?php include "inc/header.php" ?>
    
    <section id="contact" ng-controller="catalogController">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>

                <div class="col-1-1">

                    <h1 class="title">
                        Lista de   
                        <strong> Catálogos </strong>
                    </h1>

                    <div class="nano">  
                        <!-- <ul id="listCatalogo"  class="overthrow nano-content description"></ul> -->
                        <table  id="dataTable" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody id="listCatalogo">
                                <tr class="catalogo-general">
                                    <td><i class="icon-catalogo"></i></td>
                                    <td>
                                        <h3> Medidor de Vazão Tipo Rotâmetro Modelo BL </h3>
                                        <span> Para maiores informações baixe o catálogo em PDF</span>
                                    </td>
                                    <td>
                                        <div class="wrap fright">
                                            <a href="assets/pdf/Medidor-de-Vazao-Tipo-Rotametro-BL.pdf" class="btn"> Visualise Aqui </a>
                                            <a href="assets/pdf/Medidor-de-Vazao-Tipo-Rotametro-BL.pdf" download="Medidor-de-Vazao-Tipo-Rotametro-BL.pdf" class="btn"> Baixe Aqui </a>
                                        </div>
                                    </td>
                                </tr>

                               <tr class="catalogo-general">
                                    <td><i class="icon-catalogo"></i></td>
                                    <td>
                                        <h3> Medidor de Vazão Tipo Rotâmetro Modelo BLI </h3>
                                        <span> Para maiores informações baixe o catálogo em PDF</span>
                                    </td>
                                    <td>
                                        <div class="wrap fright">
                                            <a href="assets/pdf/Medidor-de-Vazao-tipo-Rotametro-BLI.pdf" class="btn"> Visualise Aqui </a>
                                            <a href="assets/pdf/Medidor-de-Vazao-tipo-Rotametro-BLI.pdf" download="assets/pdf/Medidor-de-Vazao-tipo-Rotametro-BLI.pdf" class="btn"> Baixe Aqui </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="catalogo-general">
                                    <td><i class="icon-catalogo"></i></td>
                                    <td>
                                        <h3> Medidor de Vazão Tipo Rotâmetro Modelo BLIP </h3>
                                        <span> Para maiores informações baixe o catálogo em PDF</span>
                                    </td>
                                    <td>
                                        <div class="wrap fright">
                                            <a href="assets/pdf/Medidor-de-Vazao-Tipo-Rotametro-Modelo-BLIP.pdf" class="btn"> Visualise Aqui </a>
                                            <a href="assets/pdf/Medidor-de-Vazao-Tipo-Rotametro-Modelo-BLIP.pdf" download="Medidor-de-Vazao-Tipo-Rotametro-Modelo-BLIP.pdf" class="btn"> Baixe Aqui </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="catalogo-general">
                                    <td><i class="icon-catalogo"></i></td>
                                    <td>
                                        <h3> Medidor de Vazão Tipo Calha Parshall Modelo ISBL </h3>
                                        <span> Para maiores informações baixe o catálogo em PDF</span>
                                    </td>
                                    <td>
                                        <div class="wrap fright">
                                            <a href="assets/pdf/Medidor-de-vazao-Tipo-Calha-Pashall-ISBL.pdf" class="btn"> Visualise Aqui </a>
                                            <a href="assets/pdf/Medidor-de-vazao-Tipo-Calha-Pashall-ISBL.pdf" download="Medidor-de-vazao-Tipo-Calha-Pashall-ISBL.pdf" class="btn"> Baixe Aqui </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="catalogo-general">
                                    <td><i class="icon-catalogo"></i></td>
                                    <td>
                                        <h3> Medidor de vazão tipo Turbina Modelo BLLC </h3>
                                        <span> Para maiores informações baixe o catálogo em PDF</span>
                                    </td>
                                    <td>
                                        <div class="wrap fright">
                                            <a href="assets/pdf/Medidor-de-Vazao-tipo-Turbina-BLLC.pdf" class="btn"> Visualise Aqui </a>
                                            <a href="assets/pdf/Medidor-de-Vazao-tipo-Turbina-BLLC.pdf" download="Medidor-de-Vazao-tipo-Turbina-BLLC.pdf" class="btn"> Baixe Aqui </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="catalogo-general">
                                    <td><i class="icon-catalogo"></i></td>
                                    <td>
                                        <h3> Medidor de Vazão Tipo Hidrometro Modelo BLH </h3>
                                        <span> Para maiores informações baixe o catálogo em PDF</span>
                                    </td>
                                    <td>
                                        <div class="wrap fright">
                                            <a href="javascript:;" class="btn"> Visualise Aqui </a>
                                            <a href="javascript:;" class="btn"> Baixe Aqui </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- col left -->

                
            </div>
            <!-- full -->
        </div>
        <!-- center -->
    </section>
    <!-- content -->
    
    <!-- Btn Modal -->
    <!-- <a href="javascript:;" class="btn fleft" data-reveal-id="myModal"> modal </a> -->

<!--   <div id="myModal" class="reveal-modal">
       <h1 class="title">Title</h1>
       <a class="close-reveal-modal">&#215;</a>

       <table id="tableDDD" class="dataTable"></table>
  </div> -->

<?php include "inc/footer.php" ?>
<script>
$("#nav > ul > li:eq(6) > a").addClass("active");
$('#dataTable').DataTable();
</script>
    
</body>
</html>