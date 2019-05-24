// app.controller('representativesController', ['$scope', function ($scope) {

	function bind() {	

		$("#mapa_representantes area").on("click", function(e) {

			var stateSelected = $(this).attr("alt"),
				textDefault = "Nenhum representante cadastrado neste estado. <br> Entre em contato com a nossa matriz ligue: <br> (55) 11 (2548-1500) / (2691-1500) ou através da",
				linkContact = "página de contato";

			var	tpl = "<h2 class='title'>"+ stateSelected +"</h2>";
                tpl += "<span class='text'>"+ textDefault +"</span>";
                tpl += "<a href='/contato.php' class='link-contato'>"+ linkContact +"</a>";

            $("#representantes").fadeOut();
 
            setTimeout(function  (argument) {
            	$("#representantes").fadeIn().html(tpl);
            }, 500);


			console.log(stateSelected, textDefault, linkContact);

			e.preventDefault()
		});
	}

	bind();

	

// }]);