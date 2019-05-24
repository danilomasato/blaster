var services = angular.module('app.services', []);

services.factory('Novelas', ['$http', function ($http) {

	var Novelas = {};
	
    Novelas.getData = function() {
    	var service = "services/novela.json";
        
        return $http.get(service).then(function (results) {
        	var data = results.data;
            return data;
        });
    };

   return Novelas;
     
}]);  