<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome');
                
$reccpf= filter_input(INPUT_POST, 'cpf');	
                
$recrg= filter_input(INPUT_POST, 'rg');	
$recoe= filter_input(INPUT_POST, 'orgao_emissor');
$recuf= filter_input(INPUT_POST, 'uf');
$recde= filter_input(INPUT_POST, 'data_expedicao');
$recdn= filter_input(INPUT_POST, 'data_nasc');
$recsexo= filter_input(INPUT_POST, 'sexo');	
$recetnia= filter_input(INPUT_POST, 'etnia');	
$recctps= filter_input(INPUT_POST, 'ctps');	
$reccnh= filter_input(INPUT_POST, 'cnh');	
$recpis= filter_input(INPUT_POST, 'pis_pasep');
$reccep= filter_input(INPUT_POST, 'cep');
$recendereco= filter_input(INPUT_POST, 'endereco');
               
$reccomplemento= filter_input(INPUT_POST, 'complemento');
$recn= filter_input(INPUT_POST, 'numero');
$reccidade= filter_input(INPUT_POST, 'cidade');
$recbairro= filter_input(INPUT_POST, 'bairro');
$recestado= filter_input(INPUT_POST, 'estado');
$rectelefone= filter_input(INPUT_POST, 'telefone');
$recemail= filter_input(INPUT_POST, 'email');
$recfuncao= filter_input(INPUT_POST, 'funcao');
$recsalario= filter_input(INPUT_POST, 'salario');
$rechorario= filter_input(INPUT_POST, 'horario');	
 $recbanco= filter_input(INPUT_POST, 'banco');
$recconta= filter_input(INPUT_POST, 'conta');	
$recagencia= filter_input(INPUT_POST, 'agencia');
$recntipo= filter_input(INPUT_POST, 'tipo_conta');
$recpix= filter_input(INPUT_POST, 'pix');	

  if(mysqli_query($conn, "UPDATE tb_funcionario SET nome='$recnome', cpf='$reccpf', rg='$recrg', orgao_emissor='$recoe', uf='$recuf', data_expedicao='$recde', data_nasc='$recdn', sexo='$recsexo', etnia='$recetnia', ctps='$recctps', cnh='$reccnh', pis_pasep='$recpis', cep='$reccep', endereco='$recendereco', complemento='$reccomplemento', numero='$recn', cidade='$reccidade', estado='$recestado', bairro='$recbairro', telefone='$rectelefone', email='$recemail', funcao='$recfuncao', salario='$recsalario', horario='$rechorario', banco='$recbanco', conta='$recconta', agencia='$recagencia', tipo_conta='$recntipo', pix='$recpix' WHERE id_funcionario='$recid'")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'ConsultarFuncionario.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>