<html>
  <head>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="bootstrapSelectpicker/dist/css/bootstrap-select.min.css" />
  </head>
  <body>
  <div class="container">
    <div class="row">
        <h2> Compra realizada com Sucesso!!! <a href="derruba_session.php" class="btn btn-default">Sair</a></h2>
      <hr />
    </div>

    <div class="row">
        <div class="col-md-12">
        <?php
        echo "<script>alert('Compra realizada com Sucesso'); window.location = '../index.php';</script>";
        $idproduto = $_GET['produto'];
        include_once './conectarbd.php';
        $sql = "select * from tb_produto where id_produto = '$idproduto' ";
        $query = mysqli_query($conn, $sql)or die(mysqli_error($conn));
        $linhas = mysqli_fetch_array($query);
        if($linhas){
        do{
            ?>
            <td style="padding: 10px;">
            <img src="<?php echo $linhas['imagem']; ?>" style="padding: 5px; border: 1px solid blue;" width="200">
            <br><?php echo $linhas["nome"]; ?><br><?php echo $linhas["preco"]; ?><br>
            <form method="get" action="produto2.php">
                <input type="hidden" name="produto2" value="<?php echo $linhas['idProduto'];?>">
                <input type="submit" value="Comprar" class="btn btn-default"/>
            </form>
            </td>
            <?php
        }while($linhas = mysqli_fetch_array($query));
        ?>
        <?php
        }
         ?>
            </tr>
        </div>
    </div>
  </div>
  
  <script src="bootstrapSelectpicker/js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="bootstrapSelectpicker/js/bootstrap-select.js"></script>
  <script src="bootstrapSelectpicker/js/bootstrap-select.mim.js"></script>
</body>
</html>
