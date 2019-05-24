app.controller('productsController', ['$scope', function ($scope) {
    
    $("#products-list > li .btn-budget").on("click", function(){
	    var title = $(this).parents("li").find(".wrap > h3").text();
	    
	 //    var regex = new RegExp("<br>", "g");
		// var title = title.replace(regex, "");

		console.log(title);

	    $("#formBudgetProduct h1").text(title);
	    $("#tipo_instrumento").val(title);
	});

	$("#typebudget").on("change", function(){
	    var typebudget = $(this).val(),
	    	wrapMsg = $(".wrap-msg");

	    if(typebudget != "Cotação"){
	    	wrapMsg.fadeIn();
	    } else {
	    	wrapMsg.fadeOut();
	    }
	});

	// .wrap-msg

}]);