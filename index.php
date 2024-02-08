<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Cinzel+Decorative:wght@400;700;900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include "php/navbar.php"; ?>
    <br><br><br>
    <main>
        <h2 class="d-flex justify-content-center p-2">Platillos populares</h2>
        <div class="carrusel">
            <div id="carouselExampleFade" class="carousel slide carousel-fade ">
                <div class="carousel-inner p-2">
                    <div class="carousel-item active">
                        <img src="img/ceviche_pulpo.jpg" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/tacos-pescado-pastor.jpg" alt="" class="d-block w-100">

                    </div>
                    <div class="carousel-item">
                        <img src="img/pollo-mole-verde.jpg" alt="" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <br><br>
        <div class="container text-start text-md-start">
            <div class="row">
                <div class="col-sm">
                    <h3>¡Bienvenid@s a Sol & Sazón!</h3>
                    <p class="lh-base">
                        Un rincón gastronómico donde la calidez de México se encuentra con la frescura del Mediterráneo! En nuestro restaurante, nos enorgullece fusionar los sabores y las tradiciones culinarias de dos culturas vibrantes para ofrecerte una experiencia gastronómica única y memorable. Cada platillo es una obra maestra de creatividad y pasión, elaborado con ingredientes frescos y de la más alta calidad. Desde nuestros tacos de pescado al pastor, inspirados en las calles de México, hasta nuestros risottos de inspiración mediterránea, cada bocado te transportará en un viaje culinario que deleitará tus sentidos.

                        Nuestro compromiso va más allá de ofrecerte una excelente comida; también te brindamos un ambiente acogedor y un servicio excepcional. Ya sea que vengas a disfrutar de una comida en familia, una cena romántica o una reunión con amigos, en Sol & Sazón siempre te recibiremos con una sonrisa y te trataremos como parte de nuestra familia.
                    </p>
                </div>
                <div class="col-sm">
                    <h3>Descubre una Experiencia Culinaria Única en Sabores del Sol</h3>
                    <p>
                        Te invitamos a disfrutar de una fusión de sabores vibrantes de la cocina mexicana y la frescura del Mediterráneo. Cada platillo es el resultado de nuestra pasión por la buena comida y el compromiso con la calidad y la excelencia. Nuestro menú está cuidadosamente elaborado con ingredientes frescos y de la más alta calidad, seleccionados para resaltar los sabores naturales y auténticos de cada plato.
                    </p>
                    <p>
                    Desde los mariscos frescos y las especias aromáticas del Mediterráneo hasta los chiles picantes y las salsas tradicionales de México, cada bocado es una explosión de sabores deliciosos y emocionantes. Nos enorgullece ofrecer una variedad de opciones culinarias que satisfacen todos los paladares y apetitos. Ya sea que te deleites con nuestros tacos de pescado al pastor, nuestros risottos de chorizo y rajas, o nuestras tlayudas mediterráneas, cada platillo es una celebración de la diversidad y la creatividad culinaria.
                    </p>
                    <p>
                    Nos esforzamos por crear una experiencia gastronómica que no solo satisfaga tus papilas gustativas, sino que también te sumerja en un ambiente acogedor y amigable. Desde el primer bocado hasta el último, te garantizamos una experiencia que despertará tus sentidos y dejará una impresión duradera en tu paladar. ¡Ven y únete a nosotros en Sol & Sazón para descubrir una nueva dimensión de la gastronomía mexicana-mediterránea!
                    </p>
                </div>
            </div>
        </div>
    </main>
    <footer>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</footer>
</body>

</html>
