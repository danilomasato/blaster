<!DOCTYPE html>
<?php include "inc/urlbase.php" ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css">
</head>
<body data-ng-app="app">
    <?php include "inc/header.php" ?>
    
    <section id="contact" ng-controller="productsController">
        <div class="center">
            <div class="full fleft grid grid-pad">
                
                <?php include "inc/breadcrumb.php" ?>
                <?php include "inc/sidebar-chave-de-fluxo.php" ?>

                <div class="col-9-12">
                    <ul id="products-list">
                        <li>
                            <img src="<?php echo $url ?>assets/img/construcao.jpg" width="200" alt="" style="margin: 50px 0 0 220px;">
                        </li>

                    </ul>
                    <!-- products -->
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
    $("#nav > ul > li:eq(2) > a").addClass("active");
    $("#sideBar > li:eq(6) > a").addClass("active");
</script>

    
</body>
</html>