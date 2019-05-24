<!DOCTYPE html>
<?php include "inc/urlbase.php" ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> App </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/application.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/mobile.css">

    <!-- <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/mobile.css">-->
</head>
<body data-ng-app="app">
    <?php include "inc/header.php" ?>
    
    <div id="content" ng-controller="placesExplorerController">
        <div class="center">
            <div class="full fleft">
               
                <ul>
                    <!-- <h5>Places found Near by ({{exploreNearby}})</h5> -->
                    <li ng-repeat="combo in fotos">
                        <h3>{{combo.titulo}}</h3>
                        <img ng-src="{{combo.foto}}" alt="{{combo.titulo}}">
                        <a href="{{combo.url}}">{{combo.url}}</a>
                    </li>
                </ul>
            </div>
            <!-- full -->
        </div>
        <!-- center -->
    </div>
    <!-- content -->
    
    <!-- Btn Modal -->
    <!-- <a href="javascript:;" class="btn fleft" data-reveal-id="myModal"> modal </a> -->

<!--   <div id="myModal" class="reveal-modal">
       <h1 class="title">Title</h1>
       <a class="close-reveal-modal">&#215;</a>

       <table id="tableDDD" class="dataTable"></table>
  </div> -->

<?php include "inc/footer.php" ?>

    
</body>
</html>