<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome_usu');

$reccep= filter_input(INPUT_POST, 'cep_usu');

$recendereco= filter_input(INPUT_POST, 'endereco_usu');

$recn= filter_input(INPUT_POST, 'numero_usu');

$reccomplemento= filter_input(INPUT_POST, 'complemento_usu');

$recbairro= filter_input(INPUT_POST, 'bairro_usu');

$reccidade= filter_input(INPUT_POST, 'cidade_usu');

$recestado= filter_input(INPUT_POST, 'estado_usu');

$reccel= filter_input(INPUT_POST, 'tel_cel_usu');

$recemail= filter_input(INPUT_POST, 'email_usu');




  if(mysqli_query($conn, "UPDATE tb_usuario SET nome_usu='$recnome', cep_usu='$reccep', endereco_usu='$recendereco', numero_usu='$recn', complemento_usu='$reccomplemento', bairro_usu='$recbairro', cidade_usu='$reccidade', estado_usu='$recestado', tel_cel_usu='$reccel', email_usu='$recemail' WHERE id_usuario='$recid'")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarusuario.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>