<?php

    include "usuario.php";

    $msg = false;
    $usuario = new usuario();
    if(isset($_POST['nome'])){
        if(isset($_FILES['arquivo'])){
    
            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
            $diretorio = "imagens/";
            $nomeUsu = $_POST['nome'];
            $emailUsu = $_POST['email'];
            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
            $a = $usuario->add("$nomeUsu","$emailUsu",$novo_nome);
            var_dump($a);
            echo "a";
    
        }
    }
?>


<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nome" placeholder="digite o nome">
        <input type="text" name="email" placeholder="digite o email">
        <input type="file" required name="arquivo">

        <input type="submit">
    </form>
    <p style="color: red;"> Não consegui realizar o envio de email então resolvi deixar apenas assim.</p>
</body>