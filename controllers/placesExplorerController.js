app.controller('placesExplorerController', ['$scope','Novelas', function ($scope, Novelas) {

    $scope.exploreNearby = "New York";
    
    Novelas.getData().then(function(data) {
    	// console.log('results->', data);
        $scope.fotos = [];
    	
    	for (i=0; i <= data.length ; i++) {
    		if(data[i] != null){
    		  $scope.fotos.push(data[i]);
            }
        }

        console.log('controller blaster');
    });

}]);