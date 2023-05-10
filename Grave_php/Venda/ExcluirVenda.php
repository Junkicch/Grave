<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'venda');



  if(mysqli_query($conn, "DELETE FROM tb_venda WHERE id_venda=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'ConsultarFuncionario.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>