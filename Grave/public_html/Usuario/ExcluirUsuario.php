<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'usuario');



  if(mysqli_query($conn, "DELETE FROM tb_usuario WHERE id_usuario=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'Consultarusuario.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>