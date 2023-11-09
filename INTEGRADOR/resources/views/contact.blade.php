@extends('layouts.mainlayout')
@section('content')
<div class="Tcontacto">
    <h1>Contacto</h1>
</div>
<br>
<div class="base">
<div class="razones">
    <h2>Razones por las que podrian contatarnos:</h2>
    <br>
    <p>-Aclaraciones y dudas</p>
    <p>-Horarios</p>
    <p>-Asesoria para una mejor elección</p>
    <p>-Colaboración con nosotros</p>
</div>
<div class="formulario">
    <form action="#">
    <ul>
      <label for="name">Nombre:</label>
      <br>
      <input type="text" id="name" name="nameU" />
      <br>
      <label for="mail">Correo electrónico:</label>
      <br>
      <input type="email" id="mail" name="user_mail" />
      <br>
      <label for="tel">Número de telefono:</label>
      <br>
      <input type="telf" id="tel" name="user_tel" />
      <br>
      <label for="msg">Comentanos tu problema:</label>
      <br>
      <textarea id="msg" name="user_message"></textarea>
      <br>
      <button type="submit">Envíe su mensaje</button>
  </ul>
    </form>
</div>
</div>
<div>   
    <p><h2>¿Donde nos encontramos?</h2></p>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.022768380897!2d-100.27737752636286!3d20.546249304179266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3452b278e7259%3A0xeb40a967d716216c!2sUniversidad%20Polit%C3%A9cnica%20de%20Quer%C3%A9taro!5e0!3m2!1ses!2smx!4v1699563329695!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br><br>
    <div class="redes">
    <a class="redes" href="https://www.facebook.com">Facebook<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" alt="Facebook"></a>
    <br>
    <a class="redes" href="https://www.instagram.com">Instagram <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" alt="Instagram"></a>
    <br>
    <a class="redes" href="https://www.google.com/intl/es/gmail/about/">Correo electrónico <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/2560px-Gmail_icon_%282020%29.svg.png" alt="Correo"></a>
    <br>
    <a class="redes" href="+524427718834">Teléfono <img src="https://assets.stickpng.com/images/5a4525cd546ddca7e1fcbc84.png" alt="Teléfono"></a>
    <br>
    </div>
</div>
@stop