    <?php

    include("conexao.php");

    $msg = false;//armazenar mensagem texto se deu certo ou não se der errado  ela mostra
      //###############################################

    if(isset($_FILES['arquivo'])) {//isset= existir, files nome do contairner que armazena arquivos

      $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));// strtolower, pega uma string e converte em minuscula substr, ele pega a informação e reduz o nome em 4 caracter
      //FUNCAO SUBSTRING -4 vai pegar os ultimos 4 caracteres da string, vai voltar o resultado para $extensao
      //strtolower vai enviar a extensao de tamanho -4 em minuscula
      $novo_nome = md5(time()) . $extensao; //time retorna hora, md5 criptografa a hora
      $diretorio = "upload/";

      move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //tmpname nome temporario, em sequencia o local onde o arquivo vai ser enviado

        //###############################################

      $sql_code = "INSERT INTO arquivo (codigo, arquivo, dt) VALUES(null, '$novo_nome', NOW())";//sql now, função que vai pegar a data atual

        //###############################################

        if($mysqli -> query ($sql_code))//query executa o codigo
          $msg = "ok";

          else
            $msg = "erro";
        //###############################################

      }

     ?>
     <h1>upload de arquivos</h1>
     <?php if($msg != false) echo "<p> $msg </p>"; ?> <!-- se a mensagem for diferente de falsa ele sobe a mensagem  -->
     <form action="upload.php" method="POST"  enctype="multipart/form-data">
       arquivo: <input type="file" required name="arquivo" >
       <input type="submit" value="Salvar">
     </form>
