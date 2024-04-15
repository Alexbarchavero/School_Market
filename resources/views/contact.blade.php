@extends('layouts.mainlayout')

@section('content')
<div class="razones">
    <br><br><h1>CONTACTO</h1><br><br>
    <h2>Razones para contactarnos:</h2>
    <ul class="textos">
        <li>Aclaraciones y dudas</li>
        <li>Horarios</li>
        <li>Asesoría para una mejor elección</li>
        <li>Colaboración con nosotros</li>
    </ul>
</div>
<br><br><br><br>
<div class="formulario">
    <form action="#">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="nameU" />
        
        <label for="mail">Correo electrónico:</label>
        <input type="email" id="mail" name="user_mail" />
        
        <label for="tel">Número de teléfono:</label>
        <input type="tel" id="tel" name="user_tel" />
        
        <label for="msg">Dudas/Comentarios:</label>
        <textarea id="msg" name="user_message"></textarea>
        <br>
        <button class="enviar" type="submit">Enviar</button>
    </form>
</div>
<br><br><br><br>
<div class="contactos">   
    <h2>¿Dónde nos encontramos?</h2><br>
    <div id="fr-red">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.022768380897!2d-100.27737752636286!3d20.546249304179266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3452b278e7259%3A0xeb40a967d716216c!2sUniversidad%20Polit%C3%A9cnica%20de%20Quer%C3%A9taro!5e0!3m2!1ses!2smx!4v1699563329695!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
        <div class="redes">
            <nav>
                <a href="https://www.facebook.com">Facebook<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" alt="Facebook"></a><br>
                <a href="https://www.instagram.com">Instagram <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" alt="Instagram"></a><br>
                <a href="https://www.google.com/intl/es/gmail/about/">Correo<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/2560px-Gmail_icon_%282020%29.svg.png" alt="Correo"></a><br>
            </nav>
        </div>
    </div>
</div>
@stop
