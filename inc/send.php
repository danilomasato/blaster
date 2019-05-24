<?php

	if (!isset($_POST['nome'], $POST['assunto'], $_POST['email'],
		      $_POST['departamento'], $_POST['mensagem'])) {
		$dados = array(
			'nome'         => $_POST['nome'],
			'assunto'      => $_POST['assunto'],
			'email'      => $_POST['email'],
			'departamento' => $_POST['departamento'],
			'mensagem'     => $_POST['mensagem'],
			'data_envio'   => date('d/m/Y'),
			'hora_envio'   => date('H:i:s')
		);
		
		$configuracao_da_mensagem_original = "
			<style type='text/css'>
				body {
				margin:0px;
				font-family:Verdane;
				font-size:12px;
				color: #666666;
				}
				a{
				color: #666666;
				text-decoration: none;
				}
				a:hover {
				color: #FF0000;
				text-decoration: none;
				}
		    </style>
		    <html>
		        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
		            <tr>
		              <td>
					    <tr>
		                 <td width='500'>Nome:{$dados['nome']}</td>
		                </tr>
		                <tr>
		                  <td width='320'>Assunto:<b>{$dados['assunto']}</b></td>
		                </tr>
						<tr>
		                  <td width='320'>Email:<b>{$dados['email']}</b></td>
		                </tr>
			       	    <tr>
		                  <td width='320'>Opções:{$dados['departamento']}</td>
		                </tr>
						<tr>
		                  <td width='320'>Mensagem:{$dados['nome']}</td>
		                </tr>
		            </td>
		          </tr>  
		          <tr>
		            <td>Este e-mail foi enviado em <b>{$dados['data_envio']}</b> &agrave;s <b>{$dados['hora_envio']}</b></td>
		          </tr>
		        </table>
		    </html>";
	  //enviar
		
		// emails para quem será enviado o formulário
		$email_para_onde_vai_a_mensagem = "vendas@blastercontroles.com.br";

		$headers = "MIME-Version: 1.1\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: ".$dados['email']."\r\n"; // remetente
		$headers .= "Return-Path: ".$dados['email']."\r\n"; // return-path

		//MAIS - CONFIGURAÇOES DA MENSAGEM QUE CHEGARÁ DO FORMULÁRIO
		$cabecalho_da_mensagem_original="From: $nome <$email>\n";
		$cabecalho_da_mensagem_original .= "Content-type: text/html; charset=iso-8859-1";
		//CONFIGURAÇÕES DA MENSAGEM DE RESPOSTA
		$assunto_da_mensagem_de_resposta = "Confirmação de Contato";
		$cabecalho_da_mensagem_de_resposta = "From: $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
		$configuracao_da_mensagem_de_resposta="Obrigado por entrar em contato!\nEstaremos respondendo em breve...\nAtenciosamente,\n$nome_do_site\n\nEnviado em: $date";

		//ENVIO DA MENSAGEM DO FORMULÁRIO DO SITE
		$headers = "$cabecalho_da_mensagem_original";

		$seuemail = "$email_para_onde_vai_a_mensagem";
		$assunto_email = "Orçamento via site - Blaster Controles";
		$mensagem = "$configuracao_da_mensagem_original";
		
		$envio = mail($seuemail,$assunto_email,$mensagem,$headers);

 
		if($envio){
			echo "Mensagem enviada com sucesso <meta http-equiv='refresh' content='2;URL=../contato.php'>";
		} else {
			echo "Erro ao enviar o email"; 
		}

} else { echo "campos vazios"; }

?>