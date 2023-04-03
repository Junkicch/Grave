<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'tipo');

$reccep= filter_input(INPUT_POST, 'tamanho');

$recendereco= filter_input(INPUT_POST, 'cor');

$recn= filter_input(INPUT_POST, 'colecao');



  if(mysqli_query($conn, "UPDATE tb_produto SET tipo='$recnome', tamanho='$reccep', cor='$recendereco', colecao='$recn', preco='$reccomplemento' WHERE id_produto='$recid'")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarproduto.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>