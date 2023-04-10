<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome');

$reccpf= filter_input(INPUT_POST, 'cpf');

$recdata= filter_input(INPUT_POST, 'data_nasc');

$reccep= filter_input(INPUT_POST, 'cep');

$recendereco= filter_input(INPUT_POST, 'endereco');

$reccomplemento= filter_input(INPUT_POST, 'complemento');

$recbairro= filter_input(INPUT_POST, 'bairro');

$recestado= filter_input(INPUT_POST, 'estado');

$reccel= filter_input(INPUT_POST, 'telefone');

$recemail= filter_input(INPUT_POST, 'email');




  if(mysqli_query($conn, "UPDATE tb_usuario SET nome='$recnome', cpf='$reccpf',cep='$reccep', data_nasc='$recdata', endereco='$recendereco',  complemento='$reccomplemento', bairro='$recbairro', cidade='$reccidade', telefone='$reccel', email='$recemail' WHERE id_usuario='$recid'")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarusuario.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>