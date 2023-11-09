@extends('layouts.mainlayout')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Misión Visión y Valores</title>
  <style>
    footer {
      border: 1px solid #000;
      padding: 10px 0;
      display: flex;
      justify-content: space-between;
    }
    
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }

    h2 {
      color: green;
    }

    .container {
      display: flex;
      justify-content:center;
      align-items:left;
      flex-wrap: wrap;
      gap: 20px;
    }

    .section {
      width: 400px;
      text-align:center;
      margin: 20px;
    }

    .section img {
      width: 400px;
      height: 400px;
    }

    .section p {
      text-align: justify;
      margin: 10px;
    }
    
  </style>
</head>
<body>
  <footer>
    <div class="container">
      <div class="section">
        <h2>MISIÓN</h2>
        <p style="margin: 10px;">Nuestra misión es facilitar el intercambio de conocimientos y recursos educativos a través de un eCommerce especializado en el ámbito educativo. Buscamos fomentar la colaboración, el aprendizaje continuo y la accesibilidad a nivel mundial, proporcionando una plataforma segura y confiable para la comunidad educativa.</p>
        <img src="https://th.bing.com/th/id/OIG.Bhd2.ycMYlH8h5wZXTLT?pid=ImgGn&w=1024&h=1024&rs=1" alt="Misión">
      </div>

      <div class="section">
        <h2>VISIÓN</h2>
        <p style="margin: 10px;">Nuestra visión es crear un ecosistema en línea que promueva la igualdad de acceso a la educación, brindando una plataforma donde estudiantes, educadores y organizaciones educativas puedan intercambiar recursos de manera colaborativa y global.</p>
        <img src="https://th.bing.com/th/id/OIG.L1qU56KDoW9zXmaOqetz?pid=ImgGn&w=1024&h=1024&rs=1" alt="Visión">
      </div>

      <div class="section">
        <h2>VALORES</h2>
        <p style="margin: 10px;"> 
        1.Innovación: Nos esforzamos por estar a la vanguardia de la tecnología y las mejores prácticas en educación en línea, ofreciendo soluciones innovadoras que mejoren la experiencia de intercambio y aprendizaje.<br><br>
        2.Accesibilidad: Creemos en la igualdad de oportunidades educativas para todos. Nuestra plataforma se basa en la accesibilidad, permitiendo que estudiantes y educadores de diferentes partes del mundo puedan compartir y acceder a recursos educativos de calidad.<br><br>
        3.Calidad: Nos esforzamos por mantener altos estándares de calidad en los recursos educativos disponibles en nuestra plataforma. Trabajamos en estrecha colaboración con educadores y expertos en cada campo para garantizar que los materiales sean confiables, actualizados y relevantes.<br><br>
        4.Seguridad y privacidad: La seguridad y privacidad de nuestros usuarios son de suma importancia para nosotros. Implementamos medidas de seguridad robustas para proteger los datos personales y la información confidencial de nuestros usuarios.</p>
        <img src="https://th.bing.com/th/id/OIG.zS2AA2iW9Bor1Fo7M31K?pid=ImgGn" alt="Valores">
      </div>
    </div>
  </footer>
</body>
</html>
@stop