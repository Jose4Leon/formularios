<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='main.js'></script>
</head>
<body>
<section class="get-in-touch">
   <h1 class="title">Inscripcion</h1>
   <form class="contact-form row" action="https://formsubmit.co/lkss@jose.corpipsa.com" method="post">
      <div class="form-field col-lg-6">
         <input name="name" id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Nombre</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input name="email" id="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input name="lastname" id="lastname" class="input-text js-input" type="text" required>
         <label class="label" for="lastname">Apellido</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input name="phone" id="phone" class="input-text js-input" type="text" required>
         <label class="label" for="phone">Celular</label>
      </div>
      <div class="form-field col-lg-12">
         <input name="message" id="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Mensaje</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Enviar">
      </div>

      <input type="hidden" name="_next" value="https://formu.jose.corpipsa.com/formulario2">
      <input type="hidden" name="_captcha" value="false">''
   </form>
</section>
</body>
</html>