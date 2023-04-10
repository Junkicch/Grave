<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Usuario</title>
        <link href="../img/Marca D'água Grave Preto.png" rel="icon">
        <link rel="stylesheet" href="../css/style-usuario.css"/>
        <!--<link rel="stylesheet" href="../css/formulariotop.css"/>-->
        <script>
        
            
              //arquivo funcoes_cpf.js
// validador CPF
function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;

    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }

    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    if (!v) {
        alert(c + "nCPF Válido")
    }}
   
}





            
            
        </script>
    </head>

    <body class="usuario">


       <header class="header">
            <div class="logo">
                <a href="../index.php"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            </div>
            
         
            
        </header>
        <main class="main">



            <div class="formulario" id="box">
                <h2>Cadastro Usuario</h2>
                <form method="post" action="cadastrarusuario.php" class="formulario">

                    <table>
                      
                        <ul class="form">
                            <label id="lbnome" class="labelInput">CPF:</label>
                            <input type="text"  name="cpf" id="cpf" class="inputUser" onblur="return verificarCPF(this.value)" />
                        </ul>


                        <ul class="form">
                            
                            <div id="input">
                                 <label id="password" class="labelInput">Senha:</label>
                                <input type="password" value="password" name="senha" id="senha" class="inputUser"/>
                                <img src="../img/Aberto-olho.png" height="20px">
                            </div>    
                            
                            
                           
                            
                            
                        </ul>



                         <ul class="form">
                            <button  type="submit" id="Login" class="hvr-fade" >Login</button>
                            
                             <!--<a href="FormUsuario.php"> <input type="button" id="Cancelar" class="hvr-fade " value="Cancelar"/></a>
                           -->
                        </ul>               

                    </table>
                   
                </form>
            

  
                
                <div >
                    Não tem conta? <a href="FormUsuario.php">Cadastre-se</a>
                </div>
                

            </div>
            <img src="../img/Marca D'água Grave Preto.png" alt="Imagem" height="500" width="400" class="fundo">


        </main>
    </body>
    
    <script>
    var input = document.querySelector('#input input');
var img = document.querySelector('#input img');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});
    </script>
</html>

