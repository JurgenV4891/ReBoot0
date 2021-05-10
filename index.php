<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BootSimplon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    
    
</head>

<body>  
    
    <!-- Nav Bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar red z-depth-4">
        <a href="#home" class="navbar-brand font-italic h3-responsive">Simplon</a>  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav">
            <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynav">
            <ul class="navbar-nav mr-auto ml-5">
                <li class="nav-item"><a href="#home" class="nav-link font-weight-normal">Accueil</a></li>
                <li class="nav-item"><a href="#forma" class="nav-link font-weight-normal">Nos formations</a></li>
                <li class="nav-item"><a href="#entreprise" class="nav-link font-weight-normal">Entreprise</a></li>
                <li class="nav-item"><a href="#actu" class="nav-link font-weight-normal">Actualités</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link font-weight-normal">Contact</a></li>
            </ul>
            <form class="from-inline ml-5">
                <div class="md-form my-0">
                    <input type="text" class="form-control mr-sm-2" name="search" placeholder="Recherche">
                </div>
            </form>
        </div>
    </nav>  

    <div class="carousel-inner" id="home">
        <div class="text-center">
            <img src="images/ordi.jpg" class="w-100 vh-100">
        </div>
        <div class="carousel-caption mb-5">
            <h1 class="text-white mb-4" data-aos="fade-down" data-aos-duration="2500">Simplon</h1>
            <h5 class="text-white mb-5" data-aos="fade-down" data-aos-duration="2500">Simplon.co est un réseau de fabrique solidaire inclusive qui propose des formations gratuites aux métiers techniques du numériques en france et à l'étranger.</h5>
            <a href="#">    
                <h1 class="btn btn-danger text-uppercase mb-5" data-aos="fade-up" data-aos-duration="2500">Découvrez nos formations</h1>
            </a>
        </div>
    </div>

    <!-- En-tête Nos formations -->

    <div class="container pt-4" id="#forma">
        <div class="col-md 6 mt-5 p-3" data-aos="fade-up" data-aos-duration="2500">
            <h2 class="text-center font-weight-bold" style="margin: auto">Nos Formations</h2>
            <hr class="w-25 border-bottom border-primary">
        </div>
        <h5 class="text-center mt-3" data-aos="fade-up" data-aos-duration="2500">Simplon.co est unréseau de fabrique solidaire inclusive qui propose des formations gratuites aux métiers techniques du numériques en france et à l'étranger.</h5>
    </div>

    <!-- Contenu Nos formations -->

    <div class="container mt-5 p-3">
        <div class="row">

            <div class="col-md-4 lg-2 justify-content-center" data-aos="fade-up" data-aos-duration="2500">
                <h4 class="text-center font-weight-bold"><i class="fas fa-code fa-1x text-primary"></i></br>Développeur·se Web et Web Mobile</h4>
                <p class="text-justify text-center">De l’analyse du besoin à la mise en ligne, en passant par l’interface et la base de données, le·la développeur·se web conçoit et programme des applications web.
                    Le⋅a développeur·se web réalise l’ensemble des fonctionnalités d’un site ou d’une application web. Le⋅a développeur·se web analyse les besoins des clients consignés au préalable dans un cahier des charges par le chef de projet...
                </p>
                <a href="DevWeb_content.php">
                    <button type="button" class="btn btn-danger" style="margin:75px">Découvrez la formation</button>        
                </a>
            </div>
            <div class="col-md-4 lg-2 justify-content-center" data-aos="fade-up" data-aos-duration="2500">
                <h4 class="text-center font-weight-bold"><i class="fas fa-camera-retro fa-1x text-primary"></i></br>Référent·e Digital</h4>
                <p class="text-justify text-center">De la stratégie de communication en ligne à la fidélisation en passant par la dématérialisation d’offres de service,
                    le⋅a référent⋅e digital participe activement à la stratégie digitale d’une entreprise.
                    Son principal rôle est d'identifier et d'accompagner la création de solutions numériques au sein d'une structure : site web, mise en place de solutions e-commerce, publicité en ligne (webmarketing) Lorem ipsum dolor sit amet.      
                </p>
                <a href="RefDig_content.php">
                    <button type="button" class="btn btn-danger" style="margin:75px">Découvrez la formation</button>
                </a>
            </div>
            <div class="col-md-4 lg-2 justify-content-center" data-aos="fade-up" data-aos-duration="2500">
                <h4 class="text-center font-weight-bold"><i class="fab fa-wordpress fa-1x text-primary"></i></br>Technicien·ne Supérieur·e Systèmes et Réseaux</h4>
                <p class="text-justify text-center">De l’assistance aux utilisateurs, en passant par la gestion d’un parc informatique, le·la technicien⋅ne supérieur⋅e systèmes et réseaux installe et maintient le matériel ainsi que le réseau et apporte du support informatique.
                    Le·la technicien⋅ne supérieur⋅e systèmes et réseaux participe à la mise en service et au maintien en condition opérationnelle de l’infrastructure informatique...
                </p>
                <a href="TSSR_content.php">    
                    <button type="button" class="btn btn-danger" style="margin:75px">Découvrez la formation</button>
                </a>
            </div>
            <!-- <div class="col-md-4 lg-2 justify-content-center" data-aos="fade-up" data-aos-duration="2500">
                <h4 class="text-center font-weight-bold"><i class="fas fa-camera-retro fa-1x text-primary"></i></br>Simplon Charleville</h4>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam repellendus minima quia, quo quis fugit maiores nisi asperiores amet aperiam obcaecati nostrum consequuntur!
                    Expedita, minima?</p>
            </div>
            <div class="col-md-4 lg-2 justify-content-center" data-aos="fade-up" data-aos-duration="2500">
                <h4 class="text-center font-weight-bold"><i class="fas fa-pills fa-1x text-primary"></i></br>Simplon Charleville</h4>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam repellendus minima quia, quo quis fugit maiores nisi asperiores amet aperiam obcaecati nostrum consequuntur!
                    Expedita, minima?</p>   
            </div>
            <div class="col-md-4 lg-2 justify-content-center" data-aos="fade-up" data-aos-duration="2500">
                <h4 class="text-center font-weight-bold"><i class="fas fa-ticket-alt fa-1x text-primary"></i></br>Contact</h4>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam repellendus minima quia, quo quis fugit maiores nisi asperiores amet aperiam obcaecati nostrum consequuntur!
                    Expedita, minima?</p>
            </div> -->

        </div>
    </div>

    <!-- En-tête Entreprise -->

    <div class="container pt-4" id="#entreprise">
        <div class="col-md 6 mt-5 p-3" data-aos="fade-up" data-aos-duration="2500">
            <h2 class="text-center font-weight-bold">Simplon en chiffres</h2>
            <hr class="w-25 border-bottom border-primary">
        </div>
        <h5 class="text-center mt-3" data-aos="fade-up" data-aos-duration="2500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Reprehenderit temporibus quo adipisci possimus magnam aliquid mollitia, libero beatae accusantium incidunt amet reiciendis natus ipsam vitae.</h5>
    </div>

    <!-- Contenu Entreprise -->

    <div class="container mt-5">

        <div class="progress mt-3" style="height: 35px">
            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark w-75" data-aos="fade-right" data-aos-duration="2500">
                <p class="mt-3 p-3"><span class="float-left font-weight-bold">Simplonien·ne·s depuis la création</span>
                    <span class="float-right font-weight-bold">+63</span>
                </p>
            </div>
        </div>
        <div class="progress mt-3" style="height: 35px">
            <div class="progress-bar progress-bar-animated progress-bar-striped bg-success w-100" data-aos="fade-right" data-aos-duration="2500">
                <p class="mt-3 p-3"><span class="float-left font-weight-bold">De taux de réussite au diplôme en Front-End</span>
                    <span class="float-right font-weight-bold">100 %</span>
                </p>
            </div>
        </div>
        <div class="progress mt-3" style="height: 35px">
            <div class="progress-bar progress-bar-animated progress-bar-striped bg-danger w-75" data-aos="fade-right" data-aos-duration="2500">
                <p class="mt-3 p-3"><span class="float-left font-weight-bold">De taux de réussite au diplôme en Back-End</span>
                    <span class="float-right font-weight-bold">83 %</span>  
                </p>
            </div>
        </div>
        <!-- <div class="progress mt-3" style="height: 35px">
        <div class="progress-bar progress-bar-animated progress-bar-striped bg-warning w-1" data-aos="fade-right" data-aos-duration="2500">
        <p class="mt-3 p-3"><span class="float-left font-weight-bold">Formateur</span> |
        <span class="float-right font-weight-bold">Ecole 49.3</span></p> 
        </div>
    </div> -->
    </div>

    <!-- En-tête nos contacts -->

    <div class="container pt-4" id="#contact">
        <div class="col-md 6 mt-5 p-3" data-aos="fade-up" data-aos-duration="2500">
            <h2 class="text-center font-weight-bold">Contact</h2>
            <hr class="w-25 border-bottom border-primary">
        </div>
        <h5 class="text-center mt-3" data-aos="fade-up" data-aos-duration="2500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, eveniet magni.
            Qui beatae amet obcaecati blanditiis, itaque, est iste eaque vel iure tempora aperiam porro.</h5>
    </div>

    <!-- Contenu nos contacts -->

    <div class="container pt-5">
        <div class="contact-block1" data-aos="fade-up" data-aos-duration="2500">
            <div class="row">

                <div class="col-lg-4">
                    <h2 class="mb-30 font-weight-bold text-uppercase">Nous contacter</h2>
                    <ul class="list-unstyled text-black">
                        <li><span>8, rue Claude Chrétien</span></li>
                        <li><span>Charleville-Mézières</span></li>
                        <li><span>03.24.56.62.66</span></li>
                        <li><span>contact@simplon-charleville.fr</span></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <form action="">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control border-light" placeholder="Ton Nom" required="" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control border-light" placeholder="Ton Mail" required="" />
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="topic" class="form-control border-light" placeholder="Ton Topic" required="" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control border-light" rows="5" placeholder="Ton Message" required=""></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" name="button" class="btn btn-red" value="Envoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid red pt-5 mt-5">
        <div class="container">
            <div class="row d-inline-flex">
                <div class="col-md-4 lg-2">
                    <h4 class="text-uppercase font-weight-bold text-white border-bottom w-100 hr-light text-center">Simplon</h4>
                    <h5 class="text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Mollitia unde suscipit non. Amet officiis incidunt officia ab quos obcaecati hic! Vero est quod quaerat ipsam reprehenderit iure incidunt vitae repellat pariatur ea optio,
                        earum suscipit debitis consectetur nesciunt possimus, perferendis alias quis labore deleniti in totam necessitatibus ab eaque!
                        Corrupti quia placeat cum aliquam quae at excepturi molestias ipsum, pariatur, iusto odit aliquid laudantium neque temporibus saepe aspernatur libero doloremque reprehenderit beatae et. Pariatur, rem.</h5>
                </div>

                <div class="col-md-4 lg-2">
                    <h4 class="text-uppercase font-weight-bold text-white border-bottom w-100 hr-light text-center">Lien</h4>
                    <ul class="navbar-nav">
                        <li class="nav-item hr-light"><a href="#home" class="nav-link font-weight-normal text-white">Accueil</a></li>
                        <li class="nav-item hr-light"><a href="#forma" class="nav-link font-weight-normal text-white">Nos formations</a></li>
                        <li class="nav-item hr-light"><a href="#entreprise" class="nav-link font-weight-normal text-white">Entreprise</a></li>
                        <li class="nav-item hr-light"><a href="#actu" class="nav-link font-weight-normal text-white">Actualités</a></li>
                        <li class="nav-item hr-light"><a href="#contact" class="nav-link font-weight-normal text-white">Contact</a></li>
                        <li class="nav-item hr-light"><a href="#contact" class="nav-link font-weight-normal text-white">Connexion</a></li>
                    </ul>
                </div>

                <div class="col-md-4 lg-2">
                    <h4 class="text-uppercase font-weight-bold text-white border-bottom w-100 hr-light text-center">Contactez-nous</h4>
                    <ul class="pt-2 list-unstyled">
                        <li class="text-white mt-3">8, rue Claude Chrétien</li>
                        <li class="text-white mt-3">Charleville-Mézières</li>
                        <li class="text-white mt-3">France</li>
                        <li class="text-white mt-3"><span class="font-weight-bold"> Téléphone : </span>03.24.56.62.66</li>
                        <li class="text-white mt-3"><span class="font-weight-bold"> Email : </span>contact@simplon-charleville.fr</li>
                    </ul>
                    <div class="input-group mt-4 pb-3">
                        <input type="text" class="form-control" name="email" placeholder="C'est quoi ton problème?">
                        <div class="input-group-append">
                            <button class="btn btn-default m-0 px3 py-2">
                                <i class="far fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-white border-bottom">

            <!-- Footer -->

            <div class="text-center">
                <ul class="list-unstyled d-inline-flex">
                    <li><i class="fab fa-facebook-f p-3 h4-responsive text-white"></i></li>
                    <li><i class="fab fa-twitter p-3 h4-responsive text-white"></i></li>
                    <li><i class="fab fa-instagram p-3 h4-responsive text-white"></i></li>
                    <li><i class="fab fa-google-plus-g p-3 h4-responsive text-white"></i></li>
                    <li><i class="fab fa-youtube p-3 h4-responsive text-white"></i></li>
                </ul>
            </div>

            <div class="text-center p-2">
                <p class="text-white">&copy; Copyright <a href="#home" class="text-dark text-uppercase"> Simplon</a> Tous droits réservées</p>  
                <p class="text-white">Fait par Ju V, Mat W & Flo</p>    
            </div>






        </div>
    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>