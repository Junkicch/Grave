<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Vendas</title>
        <link type="text/css" rel="stylesheet" href="../css/stylee.css">

    </head>

    <body class="consulta">
   <header class="header">
            <a href="../indexmenu.html"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            <nav class="menu">

                <ul>

                    <li><a href="#">Usuários</a>
                        <ul>
                            <li><a href="../Usuario2/Consultarusuario.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="#">Produtos</a>
                        <ul>
                            <li><a href="../Produto/FormProduto.php">Cadastrar</a></li>
                            <li><a href="../Produto/Consultarproduto.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Fornecedores</a>
                        <ul>
                            <li><a href="../Fornecedor/FormFornecedor.php">Cadastrar</a></li>
                            <li><a href="../Fornecedor/Consultarfornecedor.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Vendas</a>
                        <ul>
                            <li><a href="../Venda/FormVenda.php">Cadastrar</a></li>
                            <li><a href="../Venda/Consultarvenda.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="#">Funcionários</a>
                        <ul>
                            <li><a href="../Funcionario/FormFuncionario.php">Cadastrar</a></li>
                            <li><a href="../Funcionario/ConsultarFuncionario.php">Consultar</a>
                        </ul>
                    
                    <li><a href="#">Almoxarifado</a>
                        <ul>
                            <li><a href="../Estoque/Compras.php">Cadastrar Nova Compra</a></li>
                            <li><a href="../Estoque/ConsultarEstoque.php">Consultar Estoque</a>
                        </ul>

                        </nav>
                        </header>
        <main>
        <h1>Consultar Vendaes Cadastrados</h1>
        <table>
            <tr class="id">
                <td align="center"> <strong>ID</strong></td>	
                <td align="center"> <strong>Nome</strong></td>	
                <td align="center"> <strong>Data de Nascimento</strong></td>
                <td align="center"> <strong>CPF</strong></td>	
                <td align="center"> <strong>RG</strong></td>	
                <td align="center"> <strong>Orgão Emissor</strong></td>	
                <td align="center"> <strong>UF</strong></td>	
                <td align="center"> <strong>Data de Expedição</strong></td>	
                <td align="center"> <strong>Sexo</strong></td>	
                <td align="center"> <strong>Etnia</strong></td>	
                <td align="center"> <strong>CTPS</strong></td>	
                <td align="center"> <strong>CNH</strong></td>	
                <td align="center"> <strong>PIS/Pasep</strong></td>
                <td align="center"> <strong>CEP</strong></td>
                <td align="center"> <strong>Endereço</strong></td>
               
                
                <td align="center"> <strong>Complemento</strong></td>
                <td align="center"> <strong>Numero</strong></td>
                
                 <td align="center"> <strong>Cidade</strong></td>
                 <td align="center"> <strong>Bairro</strong></td>
                 <td align="center"> <strong>Estado</strong></td>
                 
                <td align="center"> <strong>Telefone/Celular</strong></td>
                <td align="center"> <strong>Email</strong></td>
                <td align="center"> <strong>Função</strong></td>	
                <td align="center"> <strong>Salário</strong></td>	
                <td align="center"> <strong>Horario</strong></td>	
                <td align="center"> <strong>Banco</strong></td>	
                <td align="center"> <strong>Conta</strong></td>	
                <td align="center"> <strong>Agência</strong></td>	
                <td align="center"> <strong>Tipo de Conta</strong></td>	
                <td align="center"> <strong>Pix</strong></td>	
                <td width="10"> <strong>Editar</strong></td>
                <td width="10"> <strong>Deletar</strong></td>
            </tr>

            <?php
            include("../conectarbd.php");
            $selecionar = mysqli_query($conn, "SELECT * FROM tb_venda");
            while ($campo = mysqli_fetch_array($selecionar)) {
                ?>
            <tr class="usuarios">
                    <td align="center"><?= $campo["id_venda"] ?></td>	
                <td align="center"><?= $campo["nome"] ?></td>
                
                <td align="center"><?= $campo["cpf"] ?></td>	
                
                <td align="center"><?= $campo["rg"] ?></td>	
                <td align="center"><?= $campo["orgao_emissor"] ?></td>
                <td align="center"><?= $campo["uf"] ?></td>
                <td align="center"><?= $campo["data_expedicao"] ?></td>
                <td align="center"><?= $campo["data_nasc"] ?></td>
                <td align="center"><?= $campo["sexo"] ?></td>	
                <td align="center"><?= $campo["etnia"] ?></td>	
                <td align="center"><?= $campo["ctps"] ?></td>	
                <td align="center"><?= $campo["cnh"] ?></td>	
                <td align="center"><?= $campo["pis_pasep"] ?></td>
                <td align="center"><?= $campo["cep"] ?></td>
                <td align="center"><?= $campo["endereco"] ?></td>
               
                <td align="center"><?= $campo["complemento"] ?></td>
                 <td align="center"><?= $campo["numero"] ?></td>
                 <td align="center"><?= $campo["cidade"] ?></td>
                <td align="center"><?= $campo["bairro"] ?></td>
                 <td align="center"><?= $campo["estado"] ?></td>
                <td align="center"><?= $campo["telefone"] ?></td>
                <td align="center"><?= $campo["email"] ?></td>
                <td align="center"><?= $campo["funcao"] ?></td>
                <td align="center"><?= $campo["salario"] ?></td>
                <td align="center"><?= $campo["horario"] ?></td>	
                <td align="center"><?= $campo["banco"] ?></td>	
                <td align="center"><?= $campo["conta"] ?></td>	
                <td align="center"><?= $campo["agencia"] ?></td>
                <td align="center"><?= $campo["tipo_conta"] ?></td>
                <td align="center"><?= $campo["pix"] ?></td>	

                <td align="center"><a href="FormEditarVenda.php?editarid=<?php echo $campo ['id_venda']; ?>" class="editar">Editar</a></td>
                    <td align="center"><a href="ExcluirVenda.php?p=excluir&venda=<?php echo $campo['id_venda']; ?>" class="editar">Excluir</a></td>
                </tr>
            <?php } ?>
        </table><br>
        <a href="../indexmenu.html"><input type="button" class="cancelar" value="Cancelar"/></a>
        </main>
    </body>
</html>
