<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho 11</title>
</head>
<?php

// use PHPMailer\PHPMailer\PHPMailer;

require_once "usuario.php";
    include("PHPMailer.php");
    function email($para_email, $para_nome, $assunto, $html){
        $mail2 = new PHPMailer;
        $mail2->isSMTP();

        $mail2->From = "testexe2904@gmail.com";
        $mail2->FromName = "Conta do homi";

        $mail2->Host = "http://localhost/www/lpw/atividade11/";
        $mail2->Port = 587;
        $mail2->SMTPAuth = true;
        $mail2->Username = "testexe2904@gmail.com";
        $mail2->Password = "Testexe2904Testexe2904";


        $mail2->addAddress($para_email,$para_nome);

        $mail2->Subject = $assunto;

        $mail2->AllowEmpty = "Necessário html";
        $mail2->MsgHTML($html);
        if ($mail2->Send()){
            return "1";
        }else{
            return $mail2->ErrorInfo;
        }
    }
    $mensgaem = "<p>alo?</p>";
    email("rafa10_nogueira@hotmail.com","rafael","Teste de atividade",$mensgaem);
?>
<body>
    
</body>
</html>