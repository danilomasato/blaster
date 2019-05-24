/*
 HTML5 Shiv v3.7.0 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed
*/
(function() {
  
    	setTimeout(function (argument) {
    		var breadcrumb = $(".breadcrumb");
    		var	navActive = $("#nav > ul > li > .active").text();
    		breadcrumb.find(".active").text(navActive);
    	}, 250);

})();