(function() {
    
    var controlller = {
        init: function() {
            this.bind();
            this.nav();
            this.sideBar();
            // t.budget();
            this.carousel();
        },
        bind: function() {

           document.querySelector(".btnMobile").addEventListener("click",function(){
                var nav = document.querySelector("#nav"), 
                    subMenu = document.querySelector(".sub-menu"),
                    link = document.querySelector("#nav li > a"),
                    navOverlay = document.querySelector("#nav-overlay");
                    nav.classList.toggle("nav-show");
                    navOverlay.classList.toggle("overlay-show");

                    console.log('click', nav.classList.contains("nav-show"));
            });

            document.querySelectorAll(".accordion-section-title").forEach(function(item, i) {

                item.addEventListener('click', function(e) {
                    e.preventDefault();

                    document.querySelectorAll(".accordion-section-content").forEach(function(item, i) {
                        item.style.display = "none";
                    });

                    var idAccordion = this.getAttribute("href"),
                        accordion = document.querySelector(idAccordion);

                    accordion.style.display = "block";
               });
            });

            document.querySelector(".certificate") && document.querySelector(".certificate").addEventListener('click', function(e) {
                e.preventDefault();

                var certificateImage = document.querySelector(".certificate-img");
                    certificateImage.src = "https://www.blastercontroles.com.br/assets/img/certificado-rbc.png";
            });

        },
        sideBar: function () {
            var sideBar = document.querySelectorAll('#sideBar > li');
                
            sideBar.forEach(function(item) {
                if (location.pathname.includes(item.getAttribute('data-active'))) {
                    item.classList.add('active');
                }
            });
        },
        nav: function () {
            var nav = document.querySelectorAll('#nav > ul > li a'),
                products = ['rotametro','calibracao','calha-parshall','medidor'],
                title = document.querySelector('.separator h1'),
                breadcrumb = document.querySelector('.breadcrumb .active');

                products.forEach(function(item){
                    if(location.pathname.includes(item)){
                        products = 2;
                    }
                })

            nav.forEach(function(item, index) {
                if (location.pathname.includes(item.getAttribute('data-active')) || index == products) {
                    item.classList.add('active');

                    //Inseri title no breadcrumb. 
                    if (title && breadcrumb) {
                        breadcrumb.innerHTML = '» ' + title.innerText;
                    }
                }
            });
        },
        budget: function(){
            var budget = $("#products-list > li .btn-budget");
            if (budget) {
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
        },
        carousel: function () {

            var slide = 0,
            slides = document.querySelectorAll('#slides > li');
            
            if (slides.length > 0) {
                var numSlides = slides.length,

                //Functions!!
                currentSlide = function() {
                  var itemToShow = Math.abs(slide % numSlides);
                  [].forEach.call(slides, function(el) {
                    el.classList.remove('slideActive')
                  });
                  slides[itemToShow].classList.add('slideActive');
                  resetProgress();
                  resetInterval();
                },
                next = function() {
                  slide++;
                  currentSlide();
                },
                prev = function() {
                  slide--;
                  currentSlide();
                },
                resetProgress = function() {
                  var elm = document.querySelector('.progressbar'),
                      newone = elm.cloneNode(true),
                      x = elm.parentNode.replaceChild(newone, elm);
                },
                resetslide = function() {
                  var elm = document.querySelector('#slides > li'),
                      newone = elm.cloneNode(true),
                      x = elm.parentNode.replaceChild(newone, elm);
                },
                resetInterval = function() {
                  clearInterval(autonext);
                  autonext = setInterval(function() {
                    slide++;
                    currentSlide();
                  }, 10000);
                },
                autonext = setInterval(function() {
                  next();
                }, 10000);


                document.querySelector('#next').addEventListener('click', function() {
                        next();
                    }, false);
                    document.querySelector('#previous').addEventListener('click', function() {
                        prev();
                }, false);
            }
        }
    };

    controlller.init();
    
})();;