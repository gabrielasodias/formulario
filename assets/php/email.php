<?php 

if(isset($_POST['name']) && !empty($_POST['name'])) {


$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$subject = addslashes($_POST['subject']);
$message = addslashes($_POST['message']);


$to = "gabrielasodiaspro@gmail.com";

$body = "Nome: ".$name."\r\n".
        "Email: ".$email."\r\n".
        "Assunto: ".$subject."\r\n".
        "Mensagem: ".$message."\r\n";

$header = "From:gabrielasodiaspro@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to, $body, $header)) {
    echo "E-mail enviado com sucesso";
} else {
    echo "E-mail não pode ser enviado";
}

}

?>