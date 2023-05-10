<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'login');




  if(mysqli_query($conn, "DELETE FROM tb_login WHERE id_login=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'index.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>