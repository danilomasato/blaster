<?php include "inc/urlbase.php"; ?>

<header id="header">
	<div class="header-info center">

		<div id="logo"><a href="javascript:;"><img src="<?php echo $url ?>assets/img/logo.gif" width="323" height="37" alt=""></a></div>
		
		<ul class="contact">
			<li>
				<span> Seg - Sex: 08:00 - 17:00</span>
			</li>	
			<li>
				<span>Televendas</span>
				<a href="tel:01125481500">55 (11) 2548 1500 </a>
			</li>
			<li>
				<a href="tel:01126911500">55 (11) 2691 1500  </a>
			</li>
		</ul>
	</div>
	<!-- center -->

	<button class="btnMobile" type="button">&#9776;</button>

	<nav id="nav" <?php if(!isset($isHome)) { echo 'class="nav-bg"';} ?>>	
		<ul class="nav-content center">                                         
			<li><a href="<?php echo $url ?>home" data-active="index"> home </a></li>

			<li><a href="<?php echo $url ?>historia" data-active="historia"> Blaster </a></li>
			<li>
				<a href="javascript:;" data-active="produtos">Produtos </a>
				<ul class="subitems">
					<li class="liSubMenu">
						<ul class="side-bar">
					        <li>
					            <a href="<?php echo $url ?>medidor-de-vazao-tipo-rotametro"> 
					                Medidor de Vazão <br>
					                Tipo Rotametros
					            </a>
					        </li>

					        <li>
					            <a href="<?php echo $url ?>medidor-de-vazao-tipo-turbina"> 
					                Medidor de Vazão <br>
					                Tipo Turbina
					            </a>
					        </li>

					        <li>
					            <a href="<?php echo $url ?>medidor-de-vazao-tipo-calha-parshall"> 
					                Medidor de Vazão <br>
					                Tipo Calha Parshall
					            </a>
					        </li>

					        <li>
					            <a href="<?php echo $url ?>medidor-de-vazao-tipo-eletromagnetico"> 
					                Medidor de Vazão <br>
					                Eletromagnético
					            </a>
					        </li>

					        <li>
					            <a href="<?php echo $url ?>medidor-de-vazao-tipo-woltmann"> 
					                Medidor de Vazão <br>
					                Hidrometro / Woltman 
					            </a>
					        </li>

					        <li>
					            <a href="<?php echo $url ?>medidor-de-vazao-tipo-deslocamento-positivo"> 
					                Medidor de Vazão <br>
					                Deslocamento Positivo
					            </a>
					        </li>

					        <li>
					            <a href="<?php echo $url ?>medidor-de-vazao-tipo-vortex"> 
					                Medidor de Vazão 
					                Tipo Vortex
					            </a>
					        </li>

					        <li>
					            <a href="<?php echo $url ?>medidor-de-vazao-ultrassonico"> 
					                Medidor de Vazão 
					                Ultrasônico
					            </a>
					        </li>

					        <li>
					            <a href="<?php echo $url ?>medidor-de-vazao"> 
					                Medidor de Vazão  
					            </a>
					        </li>
					        
					    </ul>
					</li>
					<li><a href="<?php echo $url ?>indicador-e-totalizador-de-vazao"> Indicador e Totalizador </a></li>		
				</ul>
			</li>
			<li><a href="javascript:;" data-active="serviços"> Serviços </a>
				<ul class="subitems">
        			<li>
			            <a href="<?php echo $url ?>calibracao-de-medidores-de-vazao"> 
			                Calibração de  
			                medidor de vazão para líquidos 
			            </a>
			        </li>
					<li>
			            <a href="<?php echo $url ?>calibracao-de-medidor-de-vazao-de-gas"> 
			                Calibração de 
			                medidor de vazão para gás 
			            </a>
			        </li>
			        <li>
			            <a href="<?php echo $url ?>calibracao-de-medidor-de-vazao-em-campo"> 
			                Calibração de medidor de vazão em campo 
			            </a>
			        </li>

			        <li>
			            <a href="<?php echo $url ?>laboratorio-de-vazao-rbc" title="">laboratório de vazão rastreado RBC</a>
			        </li>

			        <li><a href="<?php echo $url ?>manutencao-de-medidores-de-vazao">  
						Manutenção de 
        				medidores de vazão 
        				</a>
        			</li>
				</ul>
			</li>
			<li><a href="<?php echo $url ?>localizacao"> Localização </a></li>
			<li><a href="<?php echo $url ?>representantes"> Representantes </a></li>
			<li><a data-active="contato" href="<?php echo $url ?>contato"> Contato </a></li>  
		</ul>
	</nav>
</header>

