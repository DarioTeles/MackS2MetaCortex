<?php 
    if( isset($_SESSION['email_login']) ){
        echo '<footer>
                <article id="mapa_site">
                    <br>
                    <section id="coluna1">
                        <ul>
                            <li><a href="sobre.php"><b>Sobre</b></a></li>
                            <li><a href="historia.php">História</a></li>
                            <li><a href="missoes_e_valores.php">Missões e Valores</a></li>
                            <li><a href="filantropia.php">Filantropia</a></li>
                        </ul>
                    </section>
                    <section id="coluna2">
                        <ul>
                            <li><a href="solucoes.php"><b>Soluções</b></a></li>
                            <li><a href="hardware.php">Hardware</a></li>
                            <li><a href="software.php">Software</a></li>
                            <li><a href="redes_de_computadores.php">Redes de Computadores</a></li>
                            <li><a href="infraestrutura.php">Infraestrutura</a></li>
                            <li><a href="seguranca_da_informacao.php">Segurança da Informação</a></li>				
                        </ul>
                    </section>
                    <section id="coluna3">
                        <ul>
                            <li><a href="contato.php"><b>Contato</b></a></li>
                            <li><a href="trabalhe_conosco.php">Trabalhe Conosco</a></li>
                            <li><br></li>
                            <li><a href="chamados_tecnicos.php"><b>Chamados Técnicos</b></a></li>
                        </ul>
                    </section>
                    <section id="coluna4">
                        <ul>
                            <li><a href="clientes.php"><b>Clientes</b></a></li>
                            <li><br></li>
                            <li><a href="fornecedores.php"><b>Fornecedores</b></a></li>
                        </ul>
                    </section>
                </article>

                <article id="direitos_autorais">
                    <br>
                    <p > Copyright © 2015 - MetaCortex® - Todos os direitos reservados.
                </article>
            </footer>';
    } else {
        echo '<footer>
                <article id="mapa_site">
                    <br>
                    <section id="coluna1">
                        <ul>
                            <li><a href="sobre.php"><b>Sobre</b></a></li>
                            <li><a href="historia.php">História</a></li>
                            <li><a href="missoes_e_valores.php">Missões e Valores</a></li>
                            <li><a href="filantropia.php">Filantropia</a></li>
                        </ul>
                    </section>
                    <section id="coluna2">
                        <ul>
                            <li><a href="solucoes.php"><b>Soluções</b></a></li>
                            <li><a href="hardware.php">Hardware</a></li>
                            <li><a href="software.php">Software</a></li>
                            <li><a href="redes_de_computadores.php">Redes de Computadores</a></li>
                            <li><a href="infraestrutura.php">Infraestrutura</a></li>
                            <li><a href="seguranca_da_informacao.php">Segurança da Informação</a></li>				
                        </ul>
                    </section>
                    <section id="coluna3">
                        <ul>
                            <li><a href="entrar.php"><b>Contato</b></a></li>
                            <li><a href="entrar.php">Trabalhe Conosco</a></li>
                            <li><br></li>
                            <li><a href="entrar.php"><b>Chamados Técnicos</b></a></li>
                        </ul>
                    </section>
                    <section id="coluna4">
                        <ul>
                            <li><a href="clientes.php"><b>Clientes</b></a></li>
                            <li><br></li>
                            <li><a href="fornecedores.php"><b>Fornecedores</b></a></li>
                        </ul>
                    </section>
                </article>

                <article id="direitos_autorais">
                    <br>
                    <p > Copyright © 2015 - MetaCortex® - Todos os direitos reservados.
                </article>
            </footer>';
    }
    ?>