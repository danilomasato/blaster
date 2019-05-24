(function() {
    
    var controlller = {
        init: function() {
            var t = this;
            t.bind();
            t.budget();
        },
        bind: function() {

           
            mobile = $( window ).width();

            if(mobile <= "768"){
                var subMenu = $(".sub-menu"),
                link = $("#nav li > a");
                subMenu.hide();

                $(".btnMobile").on("click",function(){
                    $nav = $("#nav > ul"),
                    $nav.slideToggle().toggleClass("active");
                });

                $(".sub-product > li > a").on("click",function(e){
                    $(this).siblings(".side-bar").slideToggle();

                    e.preventDefault();
                });

                link.on("click",function(e){
                    $(this).siblings(".sub-menu").toggle();
                });
            }

            var img = $("#banner > .full > .center > img"),
                title = img.first().attr("data-title"),
                strong = img.attr("data-title-strong"),
                text = img.attr("data-description");

               $(".description-banner h2").html(title+"<br><strong>"+strong+"</strong>");
               $(".description-banner .description").html(text);

               $(".banner1").attr("src","https://blastercontroles.com.br/assets/img/rotametros-mobile.jpg");

        },
        budget: function(){
            $("#products-list > li .btn-budget").on("click", function(){
                var title = $(this).parents("li").find(".wrap > h3, .wrap > h1").text();
                

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
        }
    };

    controlller.init();
    
})();;