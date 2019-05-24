<?php
	 
    if($enviar){
	$erro = 0;
	
	if ($confirmacao != $conf2) {
		$erro = 1;
		$erroconf = 1;
		$msg_campo5 = "<div class='msg_aviso'>N&uacute;mero digitado Incorreto</div>";
	}
	
	if(empty($confirmacao)) {
		$erros = $erros+1;
		$msg_campo5 = "<div class='msg_aviso'>Campo Verifica&ccedil;&atilde;o em Branco</div>";
	}
    
	if(empty($nome)){
		$erro = 1;
		$msg_nome = 1;
	}
	
	if(empty($email)){
		$erro = 1;
		$msg_email = 1;
	}
	
	if (empty($ddd) and !empty($telefone)){
		$erro = 1;
		$msg_ddd = 1;
	} else if(!empty($ddd) and empty($telefone)){
		$erro = 1;
		$msg_telefone = 1;
	} else if(empty($ddd) and empty($telefone)){
		$erro = 1;
		$msg_ddd_e_telefone = 1;
	}
	
	if(empty($orcamento)){
		$erro = 1;
		$msg_orcamento = 1;
	}

$date = date("d/m/Y h:i");
	
if ($erro == 0) {
	
	// ****** ATENÇÃO ********
	// ABAIXO ESTÁ A CONFIGURAÇÃO DO SEU FORMULÁRIO.
	// ****** ATENÇÃO ********
	
	// RECEBE OS VALORES VINDO DO FORMULÁRIO E ATRIBUI AS VARIÁVEIS
	$assunto = $_POST['assunto'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$orcamento = $_POST['orcamento'];
	
	//CABEÇALHO - CONFIGURAÇÕES SOBRE SEUS DADOS E SEU WEBSITE
	$nome_do_site="Blaster Controles";
	$email_para_onde_vai_a_mensagem = "vendas@blastercontroles.com.br";
	
	//MAIS - CONFIGURAÇOES DA MENSAGEM QUE CHEGARÁ DO FORMULÁRIO
	$cabecalho_da_mensagem_original="From: $nome <$email>\n";
	$cabecalho_da_mensagem_original .= "Content-type: text/html; charset=iso-8859-1";
	
	// FORMA COMO RECEBERÁ O E-MAIL (FORMULÁRIO)
	// ******** OBS: SE FOR ADICIONAR NOVOS CAMPOS, ADICIONE OS CAMPOS NA VARIÁVEL ABAIXO *************
	$configuracao_da_mensagem_original="
	<b style='color:#000'>Orçamento Online para o produto $titulo_prod - Blaster Controles</b><br /><br />
	<b style='color:#000'>Nome:</b> $nome<br>
	<b style='color:#000'>E-mail:</b> $email<br>
	<b style='color:#000'>Telefone:</b> ($ddd) $telefone<br>
	<b style='color:#000'>Orçamento:</b> $orcamento<br><br>
	<b style='color:#000'>Enviado em:</b> $date<br>
	";
	
	//CONFIGURAÇÕES DA MENSAGEM DE RESPOSTA
	$assunto_da_mensagem_de_resposta = "Confirmação de Contato";
	$cabecalho_da_mensagem_de_resposta = "From: $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
	$configuracao_da_mensagem_de_resposta="Obrigado por entrar em contato!\nEstaremos respondendo em breve...\nAtenciosamente,\n$nome_do_site\n\nEnviado em: $date";
	
	// ****** IMPORTANTE ********
	// A PARTIR DE AGORA RECOMENDA-SE QUE NÃO ALTERE O SCRIPT PARA QUE O SISTEMA FINCIONE CORRETAMENTE
	// ****** IMPORTANTE ********
	
	//ENVIO DA MENSAGEM DO FORMULÁRIO DO SITE
	$headers = "$cabecalho_da_mensagem_original";
	
	$seuemail = "$email_para_onde_vai_a_mensagem";
	$assunto_email = "Orçamento via site - Blaster Controles";
	$mensagem = "$configuracao_da_mensagem_original";
	mail($seuemail,$assunto_email,$mensagem,$headers);
	
	//ENVIO DE MENSAGEM DE RESPOSTA AUTOMATICA
	$headers = "$cabecalho_da_mensagem_de_resposta";
	
	$mensagem = "$configuracao_da_mensagem_de_resposta";
	mail($email,$assunto_da_mensagem_de_resposta,$mensagem,$headers);
	print "<script>alert('$nome, em breve estaremos retornando seu contato. Obrigado.')</script>";	
	echo "<meta http-equiv=\"Refresh\" content=\"0;URL=https://www.blastercontroles.com.br/produtos-blaster.php\" />";
	}
}
?>

<form id="orcamento_online" action="" method="post" class="orcamento_online">
    
    <h4>Or&ccedil;amento Online para o produto <?=$titulo_prod?></h4>
 
	<div class="box_orcamento_online">
    	<div class="label_orcamento_online">Nome:</div>
    	<input id="nome" name="nome" type="text" class="campo_comum" value="<?=$nome?>" />
        <? if($msg_nome == 1){ echo "<div class='msg_aviso'>Campo nome est&aacute; em branco</div>"; } else { echo ""; }?>
    </div>
    
    <div class="box_orcamento_online">
    	<div class="label_orcamento_online">E-mail:</div>
        <input id="email" name="email" type="text" class="campo_comum" value="<?=$email?>" />
        <? if($msg_email == 1){ echo "<div class='msg_aviso'>Campo e-mail est&aacute; em branco</div>"; } else { echo ""; }?>
    </div>
    
    <div class="box_orcamento_online">
    	<div class="label_orcamento_online">Telefone:</div>
        <input id="ddd" name="ddd" type="text" class="campo_ddd" value="<?=$ddd?>" />
        <input id="telefone" name="telefone" type="text" class="campo_telefone" value="<?=$telefone?>" />
        <? if($msg_ddd == 1){ echo "<div class='msg_aviso'>Campo DDD est&aacute; em branco</div>"; } else { echo ""; }?>
        <? if($msg_telefone == 1){ echo "<div class='msg_aviso'>Campo telefone est&aacute; em branco</div>"; } else { echo ""; }?>
        <? if($msg_ddd_e_telefone == 1){ echo "<div class='msg_aviso'>Campos DDD e Telefone est&atilde;o em branco</div>"; } else { echo ""; }?>
    </div>
    
    <div class="box_orcamento_online">
    	<div class="label_orcamento_online">Or&ccedil;amento:</div>
        <textarea id="orcamento" name="orcamento" cols="" rows="" class="campo_orcamento"><?=$orcamento?></textarea>
        <? if($msg_orcamento == 1){ echo "<div class='msg_aviso'>Campo or&ccedil;amento est&aacute; em branco</div>"; } else { echo ""; }?>
    </div>
    
   
    
    <div class="box_orcamento_online">
    	<input id="enviar" name="enviar" type="submit" class="botao_enviar" style="float:right; margin:0;" value="Enviar" />
    </div>
</form>