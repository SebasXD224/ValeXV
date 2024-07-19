<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f87e90d60.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Valeria | Mis XV</title>
</head>
<body>
    <div class="contenido">
        <!-- SECCION PRINCIPAL INICIAL -->
        <section class="main">
            <div class="blur-filter">
                <div class="texto">
                    <h1 class="nombre">Valeria</h1>
                    <div class="container">
                        <h2 class="mis-xv">MIS XV</h2>
                        <h2 class="fecha">17 de Agosto 2024</h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCION DE AGRADECIMIENTOS -->
        <section class="seccion-agradecimiento">
            <div class="musica">
                <audio controls>
                    <source src="audio/musica.mp3" type="audio/mp3">
                    Tu navegador no soporta el elemento de audio.
                </audio>
                <h3>¡DALE PLAY!</h3>
            </div>
            <div class="agradecimiento-texto">
                <h2>Agradecimiento</h2>
                <p>¡Hola familia y amigos! Estoy muy entusiasmada por poder compartir este dia tan especial con todos ustedes<br><br>

                    -Valeria Azpeytia</p>
            </div>
        </section>

        <!-- SECCION GALERÍA -->
        <section class="seccion-galeria">

            <h2>Galeria</h2>

            <div id="demo" class="carousel slide" data-bs-ride="carousel" >
                <style>
                    .carousel {
                        width: 80%;
                        margin: 0 auto;
                        margin-top: 20px;
                        margin-bottom: 24px;
                    }
                </style>

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./images/galeria1.JPG" class="d-block" >
                <style>
                    .d-block{
                        width: 100%;
                        height: 500px;
                    }
                </style>
            </div>
            <div class="carousel-item">
                <img src="./images/galeria2.JPG" class="d-block" >
                
            </div>
            <div class="carousel-item">
                <img src="./images/galeria3.JPG" class="d-block" >
                
            </div>
            <div class="carousel-item">
                <img src="./images/galeria4.JPG" class="d-block" >
                
            </div>
            </div>
    
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        </section>

        <!-- SECCION DE UBICACION -->
        <section class="seccion-ubicacion">
            <div class="container">
                <h2>¿Cuando y Donde?</h2>
                <div class="fecha">
                    <p class="sabado">SABADO</p>
                    <p class="numero">17</p>
                    <p class="agosto">AGOSTO</p>
                </div>
                <h3>Recepción</h2>
                <div class="map-container">
                    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923.4212163271939!2d-100.29062419538683!3d25.666377253825367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662bfdb18812b5d%3A0x7b1d7dc0956b22b9!2sJuventino%20Rosas%202347%2C%20Buenos%20Aires%2C%2064800%20Monterrey%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1721241806762!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="titulo-quinta">QUINTA NAPOLES</div>
                <div class="texto-ubicacion">
                    CALLE JUVENTINO ROSAS #2347<br>
                    COLONIA BUENOS AIRES, N.L.<br><br>
                    <strong>8:00 PM</strong>
                </div>
            </div>
        </section>

        <!-- SECCION MESA DE REGALOS -->
        <section class="seccion-regalos">
            <h2>Mesa De Regalos</h2>
            <img src="images/sobre.png" class="sobre">
            <h3>¡Lluvia de Sobres!</h3>
            <div class="iconos">
                <i class="fa-solid fa-envelope"></i>
                <i class="fa-solid fa-plus"></i>
                <i class="fa-solid fa-money-bills"></i>
                <i class="fa-solid fa-arrow-right"></i>
                <i class="fa-solid fa-piggy-bank"></i>
            </div>
        </section>

        <!-- SECCION CODIGO DE VESTIMENTA -->
        <section class="seccion-vestimenta">
            <div class="container">
                <h2>Dress Code</h2>
                <div class="img-ropa">
                    <img src="images/vestido.png" class="vestido">
                    <img src="images/playera.png" class="playera">
                </div>
                <p>Semi-Formal</p>
            </div>
        </section>

        <!-- SECCION SEPERADORA CON IMAGEN -->
        <section class="seccion-separador">
        </section>

        <!-- SECCION FORMULARIO -->
        <section class="seccion-formulario">
            <div class="container">
                <h2>Asistencia</h2>
                <p>Agradezco de tu cooperación para poder asi llevar a cabo el conteo de asistencias a la perfección.</p>
                <form class="formulario">
                    <div class="form-nombre dato">
                        <label>Nombre: </label>
                        <input type="text" placeholder="Escriba su Nombre" id="name" name="name" required>
                    </div>
                    <div class="form-tel dato">
                        <label>Telefono: </label>
                        <input type="tel" placeholder="WhatsApp" id="tel" name="tel" required>
                    </div>
                    <div class="form-respuesta dato">
                        <label>Respuesta</label>
                        <div class="radio-dato">
                            <input type="radio" id="si" value="si" name="respuesta">
                            <label>¡Claro! Ahi Estare</label>
                        </div>
                        <div class="radio-dato">
                            <input type="radio" id="no" value="no" name="respuesta">
                            <label>Lo siento, no podre asistir</label>
                        </div>
                    </div>
                    <button>
                        <img src="images/whatsapp.png" class="img-whatsapp">
                        Enviar a Whatsapp
                    </button>
                </form>
            </div>
        </section>
    </div>
    
</body>
</html>