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
    <a href="https://www.facebook.com">Facebook</a>
    <br>
    <a href="https://www.instagram.com">Instagram</a>
    <br>
    <p><h2>Ubicación</h2></p>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.2536501136433!2d-100.3758575263605!3d20.61851540174567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b14be44f8af%3A0x1d798e5882c0f374!2sSan%20Pedro%20Esqueda%20Ram%C3%ADrez%2C%20Bola%C3%B1os%2C%2076144%20Santiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1ses!2smx!4v1695781175359!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br><br>
</div>
@stop