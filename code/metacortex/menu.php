<?php 
    if( isset($_SESSION['email_login']) ){
        echo '<nav id="menu"> 		
				<ul>
					<li><a href="index.php"><img src="Imagens\logo.png" alt="Logotipo" title="Logotipo"></a></li>
					<li><a href="sobre.php">Sobre</a>
						<ul>
							<li><a href="historia.php">História</a></li>
							<li><a href="missoes_e_valores.php">Missões e Valores</a></li>
							<li><a href="filantropia.php">Filantropia</a></li>
						</ul>
					</li>
					<li><a href="solucoes.php">Soluções</a>
						<ul>
							<li><a href="hardware.php">Hardware</a></li>
							<li><a href="software.php">Software</a></li>
							<li><a href="redes_de_computadores.php">Redes de Computadores</a></li>
							<li><a href="infraestrutura.php">Infraestrutura</a></li>
							<li><a href="seguranca_da_informacao.php">Segurança da Informação</a></li>
						</ul>
					</li>
					<li><a href="clientes.php">Clientes</a>
                        <ul>
							<li><a href="depoimentos.php">Depoimentos</a></li>
						</ul>
                    </li>
					<li><a href="fornecedores.php">Fornecedores</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
					<li>'.$variable.'
                        <ul>
							<li><a href="chamados_tecnicos.php">Chamados Técnicos</a></li>
                            <li><a href="contato.php">Contato</a></li>
                            <li><a href="trabalhe_conosco.php">Trabalhe Conosco</a></li>
                            <li><a href="depoimento.php">Depoimento</a></li>
                            <li><a href="form.php">Admin</a></li>
                            <li><a href="entrar.php">Sair</a></li>
						</ul>
                    </li>
				</ul>
			</nav>';
    }else{
        echo '<nav id="menu"> 		
				<ul>
					<li><a href="index.php"><img src="Imagens\logo.png" alt="Logotipo" title="Logotipo"></a></li>
					<li><a href="sobre.php">Sobre</a>
						<ul>
							<li><a href="historia.php">História</a></li>
							<li><a href="missoes_e_valores.php">Missões e Valores</a></li>
							<li><a href="filantropia.php">Filantropia</a></li>
						</ul>
					</li>
					<li><a href="solucoes.php">Soluções</a>
						<ul>
							<li><a href="hardware.php">Hardware</a></li>
							<li><a href="software.php">Software</a></li>
							<li><a href="redes_de_computadores.php">Redes de Computadores</a></li>
							<li><a href="infraestrutura.php">Infraestrutura</a></li>
							<li><a href="seguranca_da_informacao.php">Segurança da Informação</a></li>
						</ul>
					</li>
					<li><a href="clientes.php">Clientes</a>
                        <ul>
							<li><a href="depoimentos.php">Depoimentos</a></li>
						</ul>
                    </li>
					<li><a href="fornecedores.php">Fornecedores</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
					<li>'.$variable.'
                        <ul>
							<li><a href="entrar.php">Chamados Técnicos</a></li>
                            <li><a href="entrar.php">Contato</a></li>
                            <li><a href="entrar.php">Trabalhe Conosco</a></li>
                            <li><a href="entrar.php">Depoimento</a></li>
						</ul>
                    </li>
				</ul>
			</nav>';
    }
    
    
?>