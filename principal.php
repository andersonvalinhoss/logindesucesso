<?php
  //###############Iniciando a conexao###########################
  $connect = mysqli_connect("localhost", "root", "","db");
  session_start();
  //###################Area do registro###################################

  if (isset($_SESSION["username"]))
  {
      header("location:entry.php");
  }
      if (isset($_POST["register"])) //se a variavel register for diferente
      {
      if (empty($_POST["username"]) && empty($_POST["password"])) // caso um dos campos fique vazio
      {
      echo '<script>alert("Prencher ambos obrigatoriamente")</script>';
      }
      else
      {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);//não permite que algum comando de mysql seja reconhecido como parametro
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $password = md5($password);
        $query ="INSERT INTO  users(username, password) VALUES ('$username', '$password')";
        if(mysqli_query($connect, $query))
        {
          echo '<script>alert("Registrado com sucesso")</script>';
       }
    }
}
    //##################Area do login#################################
if(isset($_POST["login"]))
{
      if(empty($_POST["username"]) && empty($_POST['password']))
      {
        echo '<script>alert("requer prenchimento")</script>';
      }
      else
      {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $password= md5($password);
        $query = "SELECT * FROM users WHERE  username= '$username' AND password ='$password'";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          $_SESSION['username'] = $username;
          header("location:entry.php");
        }
        else
        {
          echo '<script>alert("Informações do usuario errado")</script>';
        }
      }
    }
 ?>
 <!DOCTYPE html>
 <html>
     <head>
           <title>Webslesson Tutorial | PHP Login Registration Form with md5() Password Encryption</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

   </head>
   <body>
     <br /> <br />
     <div class="container" style="width:500px;">
       <h3 align="center">Registro e login</h3>
       <br />
       <?php
       if(isset($_GET["action"]) == "login")
       {
        ?>
        <h3 align="center">Login</h3>
        <br />
       <form method="post">
         <label>nome do usuario</label>
         <input type="text" name="username" class="form-control" />
       <br />
       <label>Entre com a Senha</label>
       <input type="password" name="password" class="form-control" />
       <br />
       <input type="submit" name="login" value="Login" class="btn btn-info" />
       <br />
       <p align="center"><a href="principal.php">Registro</a></p>
       </form>
       <?php
        }
        else
        {
       ?>
       <h3 align="center">Registro</h3>
       <br />
       <form method="post">
         <label>Entra com nome</label>
         <input type="text" name="username" class="form-control" />
       <br />
       <label>Coloque a senha</label>
       <input type="password" name="password" class="form-control" />
       <br />
       <input type="submit" name="register" value="register" class="btn btn-info"/>
       <br />
       <p align="center"><a href="principal.php?action=login">Login</a> </p>

       </form>
       <?php
     }
        ?>
     </div>
   </body>
 </html>