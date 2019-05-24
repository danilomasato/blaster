<footer id="footer">
	<ul class="footer-items center">
		<li>
			<h4> Sobre nós </h4>
            <span>
            	Localizada em interlados São Paulo - SP, 
            	a Blaster controles se destaca no mercado 
            	por ter seus produtos desenvolvidos e produzidos 
            	no Brasil. Além disso, são mais de 10 anos de experiência
            	com sistemas de medição de controle de fluxo.
            </span>
		</li>
		<li>
			<h4> Matriz </h4>
			<ul class="company-information">
				<li>
		            <span>
		                Rua Arnoldo Felmanas, 166 - Veleiros <br>
		                São Paulo - SP - Brasil - CEP - 04774-010 <br>
		            </span>
				</li>
				<li>
					<span>
		                +55 (11) 2548 1500
		            </span>
					<small>Seg-Sex, 8am ás 17:30pm</small>
				</li>
				<li>
					<span>
		            	vendas@blastercontroles.com.br
		            </span>
					<small>Nós respondemos até 24horas</small>
				</li>
			</ul>
		</li>

		<li>

			<h4> Filial </h4>
			<ul class="company-information">
				<li>
		            <span>
		                Av. das Indústrias, <br>
		                s/n - Distrito Industrial, <br>
		                João Pessoa - PB, 58082-050 
		            </span>
				</li>
				<li>
					<span>
		                +55 (83) 4141 8142  <br>
                		+55 (83) 99996 8994  <br>
                		+55 (83) 99412 5656  <br>
		            </span>
					<small>Seg-Sex, 8am ás 17:30pm</small>
				</li>
				<li>
					<span>
		            	vendas@blastercontroles.com.br
		            </span>
					<small>Nós respondemos até 24horas</small>
				</li>
			</ul>
		</li>
	</ul>
</footer>

<div id="nav-overlay"></div>
<!-- scripts --> 
<script type="text/javascript">
	var ctrls = document.createElement('script');
		ctrls.src = 'assets/js/ctrls/vp.js';
		ctrls.type = 'text/javascript';

	var representatives = document.createElement('script');
		representatives.src = '<?php echo $url ?>controllers/representatives.js';
		representatives.type = 'text/javascript';

	var locationController = document.createElement('script');
		locationController.src = '<?php echo $url ?>controllers/locationController.js';
		locationController.type = 'text/javascript';

	// if(!location.pathname.includes('medidor-de-vazao-tipo-rotametro')) {
	// if(!location.pathname.includes('rotametros.php')) {
		// document.body.appendChild(script);
		window.onload = function() {
			document.body.appendChild(ctrls);
			if(location.pathname.includes('representantes')) {
				document.body.appendChild(representatives);
			} else if (location.pathname.includes('localizacao.php')) {
				document.body.appendChild(locationController);
			}
		};
	// }

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76151488-1', 'auto');
  ga('send', 'pageview');
</script>