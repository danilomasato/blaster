
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title> Blaster Controles </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="assets/css/application.css">
    <!-- <link rel="stylesheet" href="assets/css/mobile.css"> -->

    <meta name="description" content="A Blaster Controles se destaca no mercado por ter seus produtos desenvolvidos e produzidos no Brasil. Além disso, são mais de 10 anos de experiência com Sistemas de Medição de Vazão e Controle de Fluxo.">
    <meta name="keywords" content="blaster, blaster controles, controle blaster" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="Copyright © 2017" />
    <meta name="rating" content="Geral">
    <meta name="expires" content="never">
    <meta name="language" content="portuguese">
    <meta name="distribution" content="global">
    <meta name="author" content="Danilo Masato">
    <meta name="city" content="São Paulo">
    <meta name="State" content="São Paulo">
    <meta name="Country" content="Brazil">

</head>
<body data-ng-app="app">
    <?php include "inc/header.php"; ?>
    <?php include "inc/breadcrumb.php" ?>

    <div class="separator center">
        <h1> Fale Conosco </h1>
        <hr class="separator-line">
    </div>
    
    <section id="contact" class="center">    
        <ul class="endereco col-left">
            <li>
                <h2 class="title"> Endereço </h2>

                <span>
                    Blaster Sistema de Medição e Com LTDA. <br>
                    Rua Arnoldo Felmanas, <strong class="number">166</strong> - Veleiros <br>
                    São Paulo - SP - Brasil - CEP - <strong class="number">04774-010 </strong><br>
                </span>
                
                <span class="tel number"><strong>Telefone</strong>: 55 (11) 2548 1500 / 55 (11) 2691 1500</span>
            </li>
            <li>
                <h2 class="title"> Email </h2>

                <span>
                    vendas@blastercontroles.com.br
                </span>
            </li>
            <li>
                <h2 class="title"> Horário de atendimento </h2>

                <span>
                   De segunda a quinta das <strong class="number">8:00</strong> às <strong class="number">18:00</strong> e<br>
                    sexta das <strong class="number">8:00</strong> às <strong class="number">17:00</strong> 
                </span>
            </div>
            <li>
                <h2 class="title"> Mapa </h2>

                <span>
                   Encontre a Blaster Controles pelo mapa <br>
                   do google <a href="localizacao.php">Clique Aqui.</a>
                </span>
            </li>
        </ul>

        <div class="col-right">
            <span>
                Preencha o formulário abaixo para entrar em contato com a Blaster Controles. <br>
                Todos os campos são obrigatórios. <br>
                Ou Através do email <strong>vendas@blastercontroles.com.br</strong> <br>
                
            </span>

            <form action="http://scripts.hospedagemdesites.ws/scripts/formmail.pl" id="formContact" method="post" class="form">
                <!-- Abaixo, informe uma conta de email do domínio da hospedagem (email@domínio.com.br) -->
                <input type="hidden" name="email" value="vendas@blastercontroles.com.br"/>
                 
                <!-- Informe a conta de emails que receberá os dados do formulário nele preenchido. --> 
                <!-- Dica: Para adicionar outro recipiente do formulário, separe as contas de email por virgula Ex.: value="email@dominio.com.br, podeseroutroemail@outrodomínio.com.br"  -->
                <input type="hidden" name="recipient" value="vendas@blastercontroles.com.br"/>
                 
                <!-- Abaixo, informe o qual o assunto padrão da mensagem -->
                <input type="hidden" id="subject" name="subject" value=""/>
                 
                <!-- Nesta tag, informe o redirecionamento desejado, página principal do site, mensagem de agradecimento, etc -->
                <input type="hidden" name="redirect" value="http://www.blastercontroles.com.br/inc/sucess.php"/>

                <label for="">
                    Nome:
                    <input type="text" name="nome" id="nome">
                </label>
                <label for="">
                    Email:
                    <input type="text" name="Email" id="Email">
                </label>
                <label for="">
                    Departamento:
                    <select name="departamento" id="departamento">
                        <option value="Vendas"> Vendas </option>
                        <option value="Serviços"> Serviços </option>
                        <option value="Assistência técnica"> Assistência técnica </option>

                    </select>
                </label>
                 <label for="">
                    Assunto:
                    <input type="text" name="assunto" id="assunto">
                </label>
                <label for="">
                    Mensagem:
                    <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                </label>

                <input type="submit" class="btn">
            </form>
        </div>
    </section>
    <!-- products -->

<?php include "inc/footer.php" ?> 

</body>
</html>