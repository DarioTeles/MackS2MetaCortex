<?php session_start();
    if( isset($_SESSION['email_login']) ){
        $variable = '<a href="principal_usuario.php">'.$_SESSION['username'].'</a>' ;
    }else{
        $variable = '<a href="entrar.php"> Entrar </a>';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <meta name="author" content="Nome:Bruno Henrique Santos França. TIA:41546962"/>
        <meta name="author" content="Nome:Dário Teles de Oliveira.      TIA:41582391"/>
        <meta name="author" content="Nome:Pedro Couventaris Daspett.    TIA:41506375"/>
        <meta name="author" content="Nome:Rafael de Lima Camargo.       TIA:41512588"/>
		<link rel="stylesheet" type="text/css" href="CSS/style.css" />
		<link rel="stylesheet" type="text/css" href="CSS\style_hardware.css" />
		<title>Hardware</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body>
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p><a href="solucoes.html"><b>Soluções </a> |</b> Hardware <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
        			<h2>Manutenção</h2>
				<br>
        			<img src="Imagens/manutencao.png" alt="Manutenção" title="Manutenção">
            			<p>Suporte corporativo e residencial a equipamentos de informática. Temos suporte concernente a resolução de problemas do dia a dia como, por exemplo, manutenção de computadores (em geral) - formatação, manutenção de monitores, hardware em geral, software, instalação de programas, compartilhamento de pastas e eliminação de virus.</p>
            			<br><br><br><br>
				<h2>Consulting</h2>
				<br>
            			<img src="Imagens/consultoria.png" alt="Consultoria" title="Consultoria">
            			<p> Temos profissionais qualificados e que possuem um amplo conhecimento em hardware. Sabemos que a tecnologia avança numa velocidade incrível e como consequência torna-se difícil estar sempre atualizado com todas essas evoluções. Pensando nisso a mossa equipe busca sempre pesquisar as principais e mais modernas ferramentas de hardware, provendo assim um atendimento de excelência para os nossos clientes. Buscamos criar parcerias sólidas entre funcionários, clientes, fabricantes e fornecedores para desta forma proporcionar o melhor serviço ao menor custo possível.</p>        
    				<br><br><br><br>
				<h2>Financiamento</h2>
				<br>
    				<img src="Imagens/financiamento.png" alt="Financiamento" title="Financiamento">
    				<p> Se a sua empresa precisa de hardware, ou seja, notebooks, tablets, smartphones, servidores ou storages, a "     "  está aqui para ajudar você a adquirir a mais avançada infraestrutura dentro de seu orçamento. Com taxas competitivas e soluções customizadas, MetaCortex® é a melhor opção para ajudar você a atender de modo financeiramente suportável as suas necessidades de financiamento de hardware e continuar competitivo. Especificamente, podemos ajudar clientes com crédito qualificado a: Conservar o caixa para ser usado em outras necessidades estratégicas e investimento. Maximizar o fluxo de caixa e acelerar o ponto de equilíbrio do fluxo de caixa de um projeto com pagamentos mensais acessíveis que alinham os custos do projeto com os benefícios esperados. Incluir capacidade ou atualização, com pouco ou nenhum aumento nos pagamentos mensais. Diminuir o custo total de propriedade com o leasing a valor residual de mercado. Evitar a obsolescência tecnológica com atualizações planejadas de hardware. Gerenciar os ativos em todo o ciclo de vida da tecnologia - desde o planejamento até a aquisição, gerenciamento e descarte do equipamento.</p>
				<br><br><br><br>
 				<h2> Soluções Storage</h2>
				<br>
				<img src="Imagens/storage.png" alt="Storage" title="Storage">
				<p> Estamos em plena era virtual da computação. Podemos acessar dados e aplicativos de qualquer lugar, a qualquer momento e de qualquer dispositivo. Mas a realidade é que é cada vez mais difícil gerenciar, manter e proteger seus dados. A tendência em tratar os dados como algo estático não leva em consideração uma verdade essencial: os dados não são algo para ser “armazenado”. Eles devem ser gerenciados de forma ativa e inteligente.</p>
                <br><br><br><br>
				<h2>Gerenciamento de Equipamento de TI Durante Seu Ciclo de Vida</h2>
                <br>
				<img src="Imagens/gerenciamento.png" alt="Gerenciamento" title="Gerenciamento">
    				<p>A partir do momento que você começa a planejar uma iniciativa de TI durante o tempo de vida de sua solução, por meio do processo de retirada de seu equipamento usado, podemos ajudá-lo a tomar as decisões inteligentes necessárias para estender seu orçamento, conservar o caixa e atender aos seus requisitos de TI.</p>
		</article>

		<?php include 'footer.php';?>
	</body>
</html>
