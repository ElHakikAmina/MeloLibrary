
<html>
    <head>
        <style>
            body {
                margin: 0;
                padding: 0;
            }
        
            #myVideo {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                object-fit: cover;
                z-index: -2;
            }
        
            #videoDarkOverlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background-color: rgba(0, 0, 0, 0.45);
                z-index: -1;
            }
        
            #centerCallToAction {
                position: absolute;
                top: 50px;
                left: 10%;
                right:10%;
                /* transform: translate(-50%, -50%); */
                text-align: center;
                color: white;
            }
        
            #centerCallToAction h1 {
                font-size: 3em;
                margin-bottom: 1em;
            }
        
            #centerCallToAction p {
                font-size: 1.25em;
                margin-bottom: 2em;
            }
        
            #centerCallToAction a {
                display: inline-block;
                padding: 0.5em 2em;
                font-size: 1.5em;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: 10px;
                background-color: #960e0e;
                color: #ffffff;
                text-decoration: none;
                border-radius: 3em;
                transition: all 0.3s ease;
            }
        
            #centerCallToAction a:hover {
                background-color: transparent;
                color: #960e0e;
                border: 2px solid #960e0e;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="">
        <div  >
            <div class="container  " >
                <div class="row " style="position: absolute; left:0px; right:0px; width:100%;">
                    <div class="col-9 d-none d-md-block"></div>
                    <div class="col-3 d-none d-md-block" style="text-align:right;">
                        <a  href="{{ route('contact') }}" class="" style="color:white; text-decoration:none;">Nous contacter</a>&nbsp&nbsp&nbsp
                        <a href="{{ route('about') }}" style="color:white;text-decoration:none;">À propos de nous</a>
                    </div>
                </div>
            </div>
            <img src="{{ asset('musicCover.jpg') }}" id="myVideo" >
            <div id="videoDarkOverlay"></div>
            <div id="centerCallToAction" class="" style="margin-top: 80px;">
                <h1>
                    <img src="{{ asset('logo.jpg') }}" alt="Logo" style="width: 200px; height: 80px;">
                </h1>
                <h4>Réseau social musical numéro 1 au Maroc</h4>
                <p class="">Connectez-vous ou inscrivez-vous maintenant et rejoignez d'autres personnes partageant les mêmes idées du monde entier qui souhaitent partager leur musique ! Laissez-vous guider par la musique...</p>
                <div>
                    <a href="{{ route('login') }}">Connexion</a>
                    <a href="{{ route('register') }}">Créer un compte</a>
                </div>
            </div>
        </div>        
    </body>
</html>
