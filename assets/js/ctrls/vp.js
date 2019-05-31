(function() {
    
    var controlller = {
        init: function() {
            this.bind();
            this.nav();
            this.sideBar();
            this.representative();
            // t.budget();
            this.carousel();
        },
        bind: function() {

           document.querySelector(".btnMobile").addEventListener("click",function(){
                var nav = document.querySelector('#nav'), 
                    subMenu = document.querySelector('.sub-menu'),
                    navLinks = nav.querySelectorAll('li'),
                    navOverlay = document.querySelector('#nav-overlay');
                    nav.classList.toggle('nav-show');
                    navOverlay.classList.toggle('overlay-show');
                    
                    //Percorre todos os itens do menu.
                    navLinks.forEach(function(link) {
                        var submenu = link.querySelector('.subitems') || false;

                        // link.querySelector('a').classList.remove('active');
                        
                        //adiciona evento de click.
                        link.addEventListener('click', function(e) {
                            e.preventDefault();

                            nav.querySelector('a.active').classList.remove('active');
                            this.querySelector('a').classList.toggle('active');

                            if (submenu) {
                                submenu.classList.toggle('subitems-show');
                            }
                        });
                    });
                    

                    // console.log('click', nav.classList.contains('nav-show'));
            });

            //Percorre todos os itens do accordion.
            document.querySelectorAll(".accordion-section-title").forEach(function(item, i) {
                //adiciona evento de click.
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
            var sideBar = document.querySelectorAll('#sideBar li');
                
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

                    
                } 
            });

            //Inseri title no breadcrumb. 
            if (title && breadcrumb && Array.isArray(products)) {
                breadcrumb.innerHTML =  '» ' + title.innerText;
            } else {
                document.querySelector('.breadcrumb li:nth-child(1) > a').innerHTML += '» produtos'
                breadcrumb.innerHTML = '» ' + '&nbsp;' + title.innerText;
            }
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
        representative: function () {
            $("#map-representative area").on("click", function(e) {
                console.log(this.getAttribute('alt'))
                // var stateSelected = $(this).attr("alt"),
                //         textDefault = "Nenhum representante cadastrado neste estado. <br> Entre em contato com a nossa matriz ligue: <br> (55) 11 (2548-1500) / (2691-1500) ou através da",
                //         linkContact = "página de contato",
                //         dataText = $(this).attr("data-text");

                // if(dataText != undefined){

                //     var tpl = "<h2 class='title'><strong>"+ stateSelected +"</strong></h2>";
                //         tpl += "<span class='text'>"+ dataText +"</span>";

                //     $("#representantes").fadeOut();
         
                //     setTimeout(function  (argument) {
                //         $("#representantes").fadeIn().html(tpl);
                //     }, 500);

                // } else {

                //     var tpl = "<h2 class='title'><strong>São Paulo (Matriz)</strong></h2>";
                //         tpl += "<span class='text'>Rua Arnoldo Felmanas, 166 - Veleiros <br>São Paulo - SP - Brasil - CEP - 04774-010  <br><p><strong>TEL</strong>: (55) 11 2548-1500 / 2691-1500</p></span>";
                //         tpl += "<a href='/contato.php' class='link-contato'>Entre em Contato</a>";

                //     $("#representantes").fadeOut();
         
                //     setTimeout(function  (argument) {
                //         $("#representantes").fadeIn().html(tpl);
                //     }, 500);
                    
                // }

                e.preventDefault();
            });
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