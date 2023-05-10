<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'quantidade');

$recvalor= filter_input(INPUT_POST, 'valor_total');

$recpagamento= filter_input(INPUT_POST, 'forma_pagamento');

$recentrega= filter_input(INPUT_POST, 'entrega');

$recvend= filter_input(INPUT_POST, 'vendedor');




  if(mysqli_query($conn, "UPDATE tb_produto SET quantidade='$recnome', valor_total='$recvalor', forma_pagamento='$recpagamento', entrega='$recentrega', vendedor='$recvend' WHERE id_venda='$recid'")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'ConsultarVenda.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>