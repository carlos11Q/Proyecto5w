<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 5W</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="header">
            <div>
            <img src="{{asset('img/logo2.png')}}" width="100" alt="" loading="lazy">
            </div>
            <div class="header-seccions">
                <ul>
                    <li>Nosotros</li>
                    <li>Servicios</li>
                    <li>Paquetes</li>
                    <li>Promociones</li>
                    <li>Talleres</li>
                    <li>Contacto</li>
                    <li class="boton-login" ><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="main1">
                <p><i>Conecta tu taller automotriz a un mundo de posiblilidades</i></p>
                <div class="main1-botones">
                    <button type="submit" class="ver-mas">Ver Más</button>
                    <a href="{{ route('register') }}" class="registrarse" >Registrate</a>
                </div>
            </div>
            <div class="main2">
                <div class="main3">
                    <img src="{{asset('img/img1.png')}}" max-width: 100%; alt="Cotiza">
                </div>
            </div>
        </div>
        <div class="informacion">
            <h1 class="bienvenida">Bienvenido a <b>5W</b></h1>
            <p class="parrafo">Con nuestra aplicación web usted podrá manejar todas las tareas administrativas de su taller a un costo reducido, unas maximas prestaciones y un servicio de soporte 24/4. Podrá visualizar su agenda y la de sus empleados,emitir presupuestos a sus clientes, llevar un control del stock, tener un control documental de sus dosumentos importantes.<br>Podrá adjuntar fotos a las ordenes, directamente desde el móvil o una tableta, sin pasar por un ordenador.</p>
            <div class="boton-vermas">
                <button type="submit" class="registrarse">Ver Más</button>
            </div>
        </div>
        <div class="contenedor-servicios">
            <div class="card" style="background-image: url('https://img.freepik.com/foto-gratis/mecanico-que-usa-computadora-portatil_1170-1145.jpg?t=st=1656344409~exp=1656345009~hmac=777079de516a4e15a754073344fae8817acc5c43aa321006dc52181502d181d7&w=900')">
                <div class="textos">
                    <h3>Colaboración</h3>
                    <p>En Tiempo Real</p>
                </div>
            </div>
            <div class="card" style="background-image: url('https://img.freepik.com/foto-gratis/centro-servicio-reparacion-automoviles-auto-examen-mecanico_136930-5.jpg?w=900')">
                <div class="textos">
                    <h3>Soporte</h3>
                    <p>Profesional</p>
                </div>
            </div>
            <div class="card" style="background-image: url('https://img.freepik.com/foto-gratis/cambio-neumaticos-mecanico-servicio-automovil_1303-26903.jpg?t=st=1656374469~exp=1656375069~hmac=4a974046ee368de487591f5260c6a52157c83388b2de3f7c94e176108db92868&w=900')">
                <div class="textos">
                    <h3>Valido para todo</h3>
                    <p>Tipo de taller</p>
                </div>
            </div>
            <div class="card" style="background-image: url('https://img.freepik.com/foto-gratis/hombre-reparacion-haciendo-servicio-coche_1303-26870.jpg?t=st=1656374469~exp=1656375069~hmac=9c3f7883dc37f0d4f3a43a9a7fea800329d57265ac9a5d07fd3e7301843f507f&w=900')">
                <div class="textos">
                    <h3>Pago 100%</h3>
                    <p>Seguro</p>
                </div>
            </div>
        </div>
        <div class="contendor-work">
            <h2><b>Diseñado</b> para tu negocio</h2>
            <div class="contenedor-trabajos">
                <div class="trabajos-titulo">
                    
                    <h2>Mantenimiento</h2>
                </div>
                <div>
                    
                    <h2>Mécanica General</h2>
                </div>
                <div>
                    
                    <h2>Hojalatería y Pintura</h2>
                </div>
                <div>
                    
                    <h2>Llanteras</h2>
                </div>
                <div>
                    
                    <h2>Servicio Pesado</h2>
                </div>
                <div>
       
                    <h2>Motocicletas</h2>
                </div>
            </div>
        </div>
        <div class="servicio-calidad">
            <div class="servicio-calidad-main-1">
                <h1>Ofrece un servicio de calidad</h1>
                <p>Tú tambien puedes ser uno de nuestros clientes y poner tu taller mecánico en el mapa</p>
            </div>
            <div class="servicio-calidad-main-2">
                <img src="img/carro2.png" alt="">
            </div>
        </div>
        <div class="contacto">
            <div class="formulario-contenido">
                <h1>Contáctate con <b>Nosotros</b></h1>
                <p>Si tiene cualquier duda, quiere solicitar una demostración del programa de gestión de talleres mecánicos, quiere contactar con nosotros, quiere que un comercial le haga una demostración de nuestro programa de gestión de talleres, o para cualquier otra cuestion, puede ponerse en contacto con nosotros rellenando el siguiente formulario:</p>
                <section class="form-register">
                    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
                    <input class="controls" type="number" name="telefono" id="numero" placeholder="Ingrese su número">
                    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                    <input class="controls mensaje" type="text" name="correo" id="mensaje" placeholder="Ingrese su Mensaje">
                </section>
                <section>
                    <input class="botons" type="submit" value="Registrar">
                </section>
            </div>
        </div>
        <div class="pie-de-pagina">
            <div>
                <img src="{{asset('img/logo2.png')}}" width="100" alt="" loading="lazy">
            </div>
            <div>
                <h2>Empresa</h2>
                <br>
                <h3>Sobre nosotros</h3>
                <h3>Preguntas frecuentes</h3>
                <h3>Blog</h3>
            </div>
            <div>
                <h2>Información</h2>
                <br>
                <h3>Política de privacidad</h3>
                <h3>Política de cookies</h3>
                <h3>soporte</h3>
            </div>
            <div>
                <h2>Contacto</h2>
                <br>
                <h3>Cancún, Quintana Roo</h3>
                <h3>México</h3>
                <h3>(999) 9998080</h3>
                <h3>contacto@cincow.com.mx</h3>
            </div>
        </div>
        <footer>
            <div>&#169 Copyright 2021 5W | Todos Los Derechos Reservados</div>
        </footer>
    </body>
</html>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .header {
        display: grid;
        grid-template-columns: 1fr 2fr;
        padding-top: 2rem;
        padding-left: 4rem;
        padding-right: 4rem;
        padding-bottom: 2rem;
        background: #f1f1f1;
    }

    .header-seccions ul {
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style: none;
    }

    .header-seccions ul li {
        cursor: pointer;
        font-size: 1.2rem;
        font-weight: bold;
    }

    .boton-login{
        padding: 0.5rem;
        background-color: #e06016;
        color: #f1f1f1;
    }

    .main {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        background-color: #32527f;
        height: 450px;
    }
    .main1 {
        font-size: 3rem;
        text-transform: uppercase;
        margin: auto 2rem;
    }

    .main1 p {
        color: white;
        line-height: normal;
        font-weight: bold;
    }

    .main1-botones{
        margin padding: auto;
        width: 200px;
        display: flex;
        justify-content: space-around;
    }
    .main2{
        display: flex;
        position: relative;
    }
    .main3{
        position: absolute;
        top: 70px;
        left: 100px;
        max-width: 100%;
    }

    .main3 > img{
        height: 440px;
        width: 480px;
        position: absolute;
    }

    .ver-mas{
        padding: .7rem;
        background-color: #f1f1f1;
        color: #2d3748;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
    }

    .registrarse{
        padding: .7rem;
        background-color: #e06016;
        color: #f1f1f1;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
    }
    .informacion{
        margin-top: 120px;
        margin-bottom: 3rem;
    }

    .bienvenida{
        text-align: center;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .bienvenida > b {
        color: #e06016;
    }

    .parrafo{
        padding-top: 1rem;
        padding-right: 10rem;
        padding-left: 10rem;
        padding-bottom: 2rem;
        text-align: center;
    }
    .boton-vermas{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        width: 100%;
    }
    .boton-vermas > button{
        padding: .7rem;
        background-color: #e06016;
        color: #f1f1f1;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        width: 120px;

    }
    .contenedor-servicios{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        width: 90%;
        max-width: 900px;
        margin: auto;
    }
    .card{
        border-radius: 3px;
	    min-height: 340px;
	    font-weight: bold;
	    padding: 20px;
	    /* position: relative; */
	    /* overflow: hidden; */
	    background-size: cover;
	    background-position: center center;
        background-color: rgba(0,0,0,.06);
        width: 450px;
        margin:auto;
    }
    .textos > h3 {
        color: #edf2f7;
        font-size: 2rem;
        text-transform: uppercase;
    }
    .textos > p {
        color: #e06016;
        font-size: 1.6rem;
        text-transform: capitalize;
    }
    .contenedor-trabajos{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        width: 90%;
        max-width: 1200px;
        margin: auto;
    }
    .contenedor-trabajos > div{
        border: 1px solid #e2e2e2;
        box-shadow: 0px 0px 10px black;
        border-radius: 10px;
        padding: 5px;
        display: flex;
        height: 5rem;
        justify-content: center;
        align-items: center;
    }
    .contenedor-trabajos > div > img{
        margin-right: 12px;
    }
    .contendor-work{
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .contendor-work > h2{
        text-align: center;
        text-transform: capitalize;
        font-size: 2rem;
        margin-bottom: 2rem;
    }
    .contendor-work > h2 > b{
        color: #e06016;
    }
    .pie-de-pagina{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        padding-top: 2.5rem;
        padding-left: 4rem;
        padding-right: 4rem;
        padding-bottom: 2.8rem;
        background-color:#32527f;
        color: white;
    }
    .servicio-calidad{
        display: grid;
        grid-template-rows: repeat(2, 1fr);
        background-color: #e06016;
        color: #f1f1f1;
        height: 370px;
        text-align: center;
        padding-top: 4rem;
    }
    .servicio-calidad-main-1{
        /* text-justify: center; */
    }
    .formulario-contenido{
        text-align: center;
        margin-top: 8rem;
    }
    .formulario-contenido > h1 > b{
        color: #e06016;
    }
    .formulario-contenido > p {
        padding-top: 1.5rem;
        padding-left: 4rem;
        padding-right: 4rem;
    }
    .form-register {
        padding-left: 8rem;
        padding-right: 8rem;
        width: 100%;
        margin: auto;
        margin-top: 40px;
        margin-bottom: 40px;
        border-radius: 4px;
        font-family: 'calibri';
        color: white;
        display:grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 20px;
    }
    .controls {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 16px;
        border: 1px solid #1f53c5;
        font-family: 'calibri';
        font-size: 18px;
        color: white;
    }

    .form-register p {
        height: 40px;
        text-align: center;
        font-size: 18px;
        line-height: 40px;
    }

    .form-register a {
        color: white;
        text-decoration: none;
    }

    .form-register a:hover {
        color: white;
        text-decoration: underline;
    }

    .form-register .botons {
        width: 100%;
        background: #1f53c5;
        border: none;
        padding: 12px;
        color: white;
        margin: 16px 0;
        font-size: 16px;
    }
    .mensaje{
        grid-column: -4 /-1;
    }
    footer {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 2.5rem;
        width: 100%;
        background: #e06016;
        color: #edf2f7;
    }
</style>
