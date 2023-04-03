<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome');

$reccnpj= filter_input(INPUT_POST, 'cnpj');

$rectipo= filter_input(INPUT_POST, 'tipo');

$reccep= filter_input(INPUT_POST, 'cep');

$recendereco= filter_input(INPUT_POST, 'endereco');

$recn= filter_input(INPUT_POST, 'numero');

$reccomplemento= filter_input(INPUT_POST, 'complemento');

$recbairro= filter_input(INPUT_POST, 'bairro');

$reccidade= filter_input(INPUT_POST, 'cidade');

$recestado= filter_input(INPUT_POST, 'estado');

$reccel= filter_input(INPUT_POST, 'tel_cel');

$recemail= filter_input(INPUT_POST, 'email');




  if(mysqli_query($conn, "UPDATE tb_fornecedor SET nome='$recnome', cnpj='$reccnpj', tipo='$rectipo', cep='$reccep', endereco='$recendereco', numero='$recn', complemento='$reccomplemento', bairro='$recbairro', cidade='$reccidade', estado='$recestado', tel_cel='$reccel', email='$recemail' WHERE id_fornecedor='$recid'")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarfornecedor.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>