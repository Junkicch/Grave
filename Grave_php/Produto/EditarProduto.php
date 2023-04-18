<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome');

$rectipo= filter_input(INPUT_POST, 'tipo');

$rectamanho= filter_input(INPUT_POST, 'tamanho');

$reccor= filter_input(INPUT_POST, 'cor');

$reccolecao= filter_input(INPUT_POST, 'colecao');

$recpreco= filter_input(INPUT_POST, 'preco');

$recqntd= filter_input(INPUT_POST, 'quantidade');

$recimagem= filter_input(INPUT_POST, 'imagem');

  if(mysqli_query($conn, "UPDATE tb_produto SET nome='$recnome', tipo='$rectipo', tamanho='$rectamanho', cor='$reccor', colecao='$reccolecao', preco='$recpreco', quantidade='$recqntd', imagem='$recimagem' WHERE id_produto='$recid'")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarproduto.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>
