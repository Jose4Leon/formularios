<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['lastname'] && !empty($_POST['phone'])) && !empty($_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $header = "From: killandyou123@gmail.com" . "\r\n";
        $header.= "Reply-To: killandyou123@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($name,$email,$lastname,$phone,$message,$header);
        if($mail){
            echo "<h4>¡Mail Enviado!</h4>";
        }
    }
}

?>
