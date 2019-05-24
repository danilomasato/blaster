// app.controller('representativesController', ['$scope', function ($scope) {

	function bind() {	

		$("#mapa_representantes area").on("click", function(e) {

			var stateSelected = $(this).attr("alt"),
					textDefault = "Nenhum representante cadastrado neste estado. <br> Entre em contato com a nossa matriz ligue: <br> (55) 11 (2548-1500) / (2691-1500) ou através da",
					linkContact = "página de contato",
					dataText = $(this).attr("data-text");

			if(dataText != undefined){

				var	tpl = "<h2 class='title'><strong>"+ stateSelected +"</strong></h2>";
	                tpl += "<span class='text'>"+ dataText +"</span>";

	            $("#representantes").fadeOut();
	 
	            setTimeout(function  (argument) {
	            	$("#representantes").fadeIn().html(tpl);
	            }, 500);

			} else {

				var	tpl = "<h2 class='title'><strong>São Paulo (Matriz)</strong></h2>";
	                tpl += "<span class='text'>Rua Arnoldo Felmanas, 166 - Veleiros <br>São Paulo - SP - Brasil - CEP - 04774-010  <br><p><strong>TEL</strong>: (55) 11 2548-1500 / 2691-1500</p></span>";
	                tpl += "<a href='/contato.php' class='link-contato'>Entre em Contato</a>";

	            $("#representantes").fadeOut();
	 
	            setTimeout(function  (argument) {
	            	$("#representantes").fadeIn().html(tpl);
	            }, 500);
				
			}

			e.preventDefault();
		});

		$("#map").change("click", function(e) {
			$( "select option:selected" ).each(function() {
				var stateSelected = $(this).attr("alt"),
					textDefault = "Nenhum representante cadastrado neste estado. <br> Entre em contato com a nossa matriz ligue: <br> (55) 11 (2548-1500) / (2691-1500) ou através da",
					linkContact = "página de contato",
					dataText = $(this).attr("data-text");

				if(dataText != undefined){

					var	tpl = "<h2 class='title'><strong>"+ stateSelected +"</strong></h2>";
		                tpl += "<span class='text'>"+ dataText +"</span>";

		            $("#representantes").fadeOut();
		 
		            setTimeout(function  (argument) {
		            	$("#representantes").fadeIn().html(tpl);
		            }, 500);

				} else {

					var	tpl = "<h2 class='title'><strong>São Paulo (Matriz)</strong></h2>";
		                tpl += "<span class='text'>Rua Arnoldo Felmanas, 166 - Veleiros <br>São Paulo - SP - Brasil - CEP - 04774-010  <br><p><strong>TEL</strong>: (55) 11 2548-1500 / 2691-1500</p></span>";
		                tpl += "<a href='/contato.php' class='link-contato'>Entre em Contato</a>";

		            $("#representantes").fadeOut();
		 
		            setTimeout(function  (argument) {
		            	$("#representantes").fadeIn().html(tpl);
		            }, 500);
					
				}

				e.preventDefault();
			});
		});
	}

	bind();

	

// }]);