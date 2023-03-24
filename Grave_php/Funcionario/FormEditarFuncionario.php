<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="UTF-8">

    <title>Editar Produto</title>

    <link rel="stylesheet" href="css/estilousus.css"/>



  </head>

  <body>

    <?php

      include("../conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_produto WHERE id_produto=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>

    <div class="usuulario">

        <form method="post" action="EditarFornecedor.php">

        <h1>Alterar Usuarioes</h1>
      
<!esta linha cria um campo oculto para passar o id_Usuario, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_produto"]?>"> 

        <label>Tipo</label><br> 
        <input type="text" name="tipo" placeholder="Nome" value="<?=$campo["tipo"]?>"> <br><br>
        
        <label>Tamanho</label><br> 
        <input type="text" name="tamanho" placeholder="Nome" value="<?=$campo["tamanho"]?>"> <br><br>
        
        <label>Cor</label><br> 
        <input type="text" name="cor" placeholder="Nome" value="<?=$campo["cor"]?>"> <br><br>
        
        <label>Coleção</label><br> 
        <input type="text" name="colecao" placeholder="Nome" value="<?=$campo["colecao"]?>"> <br><br>
        
        <label>Preço</label><br> 
        <input type="text" name="preco" placeholder="Nome" value="<?=$campo["preco"]?>"> <br><br>
         
        <input type="submit" class="botoes" value="Salvar" >
        <a href="ConsultarFuncionario.php"><input type="button" class="botoes" value="Cancelar"/></a>
        
      </form>

    </div>

     

  </body>

</html>
